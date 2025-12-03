<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SaaS Manager - Future of Subscription Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        body { margin: 0; overflow-x: hidden; background-color: #0f172a; color: white; font-family: 'Inter', sans-serif; }
        #canvas-container { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; }
        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="antialiased">

    <!-- 3D Background -->
    <div id="canvas-container"></div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 start-0 border-b border-gray-800 bg-gray-900/80 backdrop-blur-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-bold whitespace-nowrap text-white">SaaS<span class="text-indigo-500">Manager</span></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/login.html" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2">Login</a>
                <a href="/register.html" class="text-white bg-transparent border border-indigo-500 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-indigo-800 font-medium rounded-lg text-sm px-4 py-2 text-center">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative z-10 flex items-center justify-center h-screen text-center px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="mb-4 text-5xl font-extrabold tracking-tight leading-none text-white md:text-6xl lg:text-7xl">
                Manage Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">SaaS Empire</span>
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                The ultimate platform for managing subscriptions, plans, and recurring billing. Scalable, secure, and designed for growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/pricing.html" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-900 transition-transform hover:scale-105">
                    View Pricing
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="/admin.html" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-300 rounded-lg border border-gray-600 hover:text-white hover:bg-gray-700 focus:ring-4 focus:ring-gray-800 transition-transform hover:scale-105">
                    Admin Dashboard
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="relative z-10 py-24 bg-gray-900/50">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16 mx-auto text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Built for Scale</h2>
                <p class="text-gray-400 sm:text-xl">Everything you need to launch and grow your subscription business.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <!-- Service 1 -->
                <div class="glass-card p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-indigo-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-indigo-400 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Plan Management</h3>
                    <p class="text-gray-400">Create flexible plans with custom pricing, intervals, and features. Manage everything from a powerful admin dashboard.</p>
                </div>
                <!-- Service 2 -->
                <div class="glass-card p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-indigo-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-indigo-400 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Recurring Billing</h3>
                    <p class="text-gray-400">Automated subscription billing with support for multiple currencies. Seamless integration with payment gateways.</p>
                </div>
                <!-- Service 3 -->
                <div class="glass-card p-8 rounded-xl shadow-lg transform hover:-translate-y-2 transition duration-300">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-indigo-900 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-indigo-400 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold text-white">Real-time Analytics</h3>
                    <p class="text-gray-400">Track your MRR, churn, and subscriber growth with detailed reports and real-time dashboards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-4 bg-gray-900 md:p-8 lg:p-10 border-t border-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#" class="flex justify-center items-center text-2xl font-semibold text-white">
                SaaS<span class="text-indigo-500">Manager</span>
            </a>
            <p class="my-6 text-gray-400">Built for developers, by developers.</p>
            <span class="text-sm text-gray-500 sm:text-center">© 2025 <a href="#" class="hover:underline">SaaS Manager™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- Three.js Script -->
    <script>
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.getElementById('canvas-container').appendChild(renderer.domElement);

        // Particles
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 700;
        const posArray = new Float32Array(particlesCount * 3);

        for(let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 20; // Spread
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

        const material = new THREE.PointsMaterial({
            size: 0.02,
            color: 0x6366f1, // Indigo-500
            transparent: true,
            opacity: 0.8,
        });

        const particlesMesh = new THREE.Points(particlesGeometry, material);
        scene.add(particlesMesh);

        // Connecting Lines
        const lineMaterial = new THREE.LineBasicMaterial({
            color: 0x6366f1,
            transparent: true,
            opacity: 0.15
        });

        // Mouse Interaction
        document.addEventListener('mousemove', animateParticles);

        let mouseX = 0;
        let mouseY = 0;

        function animateParticles(event) {
            mouseX = event.clientX;
            mouseY = event.clientY;
        }

        camera.position.z = 3;

        const clock = new THREE.Clock();

        function animate() {
            requestAnimationFrame(animate);

            const elapsedTime = clock.getElapsedTime();

            // Rotate entire system slowly
            particlesMesh.rotation.y = elapsedTime * 0.05;
            particlesMesh.rotation.x = elapsedTime * 0.02;

            // Interactive movement
            particlesMesh.rotation.x += mouseY * 0.00005;
            particlesMesh.rotation.y += mouseX * 0.00005;

            renderer.render(scene, camera);
        }

        animate();

        // Resize Handler
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
</body>
</html>
