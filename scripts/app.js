import * as THREE from './three.module.js'; 
import { OrbitControls } from './OrbitControls.js';

// Canvas
const canvas = document.querySelector("canvas.webgl");

// Scene
const scene = new THREE.Scene();

/**
 * Galaxy
 */
const params = {
  count: 300000,
  size: 0.01,
  radius: 12,
  branches: 12,
  spin: 1,
  randomness: 1,
  randomnessPower: 1,
  insideColor: "#ff6030",
  outsideColor: "#1b3984"
};

let geometry = null;
let material = null;
let points = null;

const generateGalaxy = () => {
  if (points) {
    scene.remove(points);
    material.dispose();
    geometry.dispose();
  }

  // Galaxy

  geometry = new THREE.BufferGeometry();
  const positions = new Float32Array(params.count * 3);
  const colors = new Float32Array(params.count * 3);

  const colorInside = new THREE.Color(params.insideColor);
  const colorOutside = new THREE.Color(params.outsideColor);

  for (let i = 0; i < params.count; i++) {
    const i3 = i * 3;

    const r = Math.random() * params.radius;

    const mixedColor = colorInside.clone();
    mixedColor.lerp(colorOutside, r / params.radius);
    colors[i3] = mixedColor.r;
    colors[i3 + 1] = mixedColor.g;
    colors[i3 + 2] = mixedColor.b;

    const branchIndex = i % params.branches;
    const branchAngle = branchIndex / params.branches;
    const rotation = branchAngle * Math.PI * 2;
    const spinAngle = r * params.spin;

    const randomX =
      Math.pow(Math.random(), params.randomnessPower) *
      (Math.random() - 0.5) *
      params.randomness *
      r;
    const randomY =
      Math.pow(Math.random(), params.randomnessPower) *
      (Math.random() - 0.5) *
      params.randomness *
      r;
    const randomZ =
      Math.pow(Math.random(), params.randomnessPower) *
      (Math.random() - 0.5) *
      params.randomness *
      r;

    positions[i3] = Math.cos(rotation + spinAngle) * r + randomX;
    positions[i3 + 1] = randomY;
    positions[i3 + 2] = Math.sin(rotation + spinAngle) * r + randomZ;
  }

  // Branches

  geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));
  geometry.setAttribute("color", new THREE.BufferAttribute(colors, 3));

  material = new THREE.PointsMaterial({
    color: "#6359ee",
    size: params.size,
    sizeAttenuation: true,
    depthWrite: false,
    blending: THREE.AdditiveBlending,
    vertexColors: true
  });
  points = new THREE.Points(geometry, material);
  scene.add(points);
};
generateGalaxy();

/**
 * Sizes
 */
const sizes = {
  width: window.innerWidth,
  height: window.innerHeight
};

window.addEventListener("resize", () => {
  // Update sizes
  sizes.width = window.innerWidth;
  sizes.height = window.innerHeight;

  // Update camera
  camera.aspect = sizes.width / sizes.height;
  camera.updateProjectionMatrix();

  // Update renderer
  renderer.setSize(sizes.width, sizes.height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
});

/**
 * Camera
 */
// Base camera
const camera = new THREE.PerspectiveCamera(
  75,
  sizes.width / sizes.height,
  0.1,
  100
);
camera.position.x = 3;
camera.position.y = 3;
camera.position.z = 3;
scene.add(camera);

// Controls
const controls = new OrbitControls(camera, canvas);
controls.enableDamping = true;
controls.autoRotate = true;

/**
 * Renderer
 */
const renderer = new THREE.WebGLRenderer({
  canvas: canvas, alpha: true
});
renderer.setSize(sizes.width, sizes.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

/**
 * Animate
 */
const clock = new THREE.Clock();

const tick = () => {
  const elapsedTime = clock.getElapsedTime();

  // Update controls
  controls.update();

  // Render
  renderer.render(scene, camera);

  // Call tick again on the next frame
  window.requestAnimationFrame(tick);
};

tick();