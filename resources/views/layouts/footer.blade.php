<!-- PIE DE PÁGINA (FOOTER) - DISEÑO SEMÁNTICO Y RESPONSIVO CON TAILWIND CSS -->
<footer class="bg-gray-900 text-gray-300 border-t border-gray-800 py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Columna 1: Misión Social (Rúbrica: Bien común y bienestar social - Criterio 7.2) -->
            <div>
                <h3 class="text-white text-lg font-bold mb-4">La Alacena</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Nuestra misión es combatir el desperdicio de alimentos conectando a los negocios locales con personas interesadas en rescatar comida de calidad a excelentes precios. Promovemos el bien común, la sostenibilidad ambiental y la responsabilidad social en Arequipa.
                </p>
            </div>

            <!-- Columna 2: Enlaces de Navegación Operativa (Frontend) -->
            <div>
                <h3 class="text-white text-lg font-bold mb-4">Enlaces rápidos</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-green-400 transition duration-200">Inicio</a></li>
                    <li><a href="#" class="hover:text-green-400 transition duration-200">Explorar ofertas</a></li>
                    <li><a href="#" class="hover:text-green-400 transition duration-200">Pedidos</a></li>
                </ul>
            </div>

            <!-- Columna 3: Propiedad Intelectual y Fuentes (Rúbrica: Propiedad intelectual de terceros - Criterio 7.3) -->
            <div>
                <h3 class="text-white text-lg font-bold mb-4">Propiedad Intelectual y Fuentes</h3>
                <p class="text-sm text-gray-400 leading-relaxed mb-3">
                    Reconocemos y respetamos la propiedad intelectual y el software libre. Este proyecto académico utiliza las siguientes herramientas y tecnologías de terceros:
                </p>
                <div class="flex flex-wrap gap-2 text-xs">
                    <span class="bg-gray-800 text-gray-300 px-2 py-1 rounded">Laravel (MIT License)</span>
                    <span class="bg-gray-800 text-gray-300 px-2 py-1 rounded">Tailwind CSS (MIT)</span>
                    <span class="bg-gray-800 text-gray-300 px-2 py-1 rounded">Alpine.js (MIT)</span>
                    <span class="bg-gray-800 text-gray-300 px-2 py-1 rounded">Google Fonts (OFL)</span>
                </div>
            </div>

        </div>

        <!-- Línea divisoria inferior y Derechos Reservados -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} La Alacena. Trabajo Académico para la asignatura de Programación Web. Todos los derechos de terceros reservados.</p>
        </div>
    </div>
</footer>
