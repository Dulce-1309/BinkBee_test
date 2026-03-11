# BinkBe Frontend Test

## Instalación

Yo utilicé XAMPP como servidor local, por lo tanto 

1. Instalar un servidor PHP (Recomendado: XAMPP)
2. Clonar el repositorio
3. Copiar la carpeta resultante dentro de htdocs 
4. Ejecutar un servidor local, en mi caso XAMPP (Iniciar Apache desde el panel de control)
5. Abrir en el navegador:
	http://localhost/test/index.php

## Tecnologías y características implementadas 

- HTML5 (estructura de la página)
	-Importación de la tipografía Poppins (para replicar el 	diseño de la landing original)
	-Importación de Font Awesome para implementar iconos
- CSS3 (estilos)
	-Uso de Grid para el layout responsive.
	-Animaciones suaves en botones de filtros 
	-Animaciones suaves para tarjetas
	-Paleta de colores similar a la landing original
	-Indicador de disponibilidad dinámico
- JavaScript (lógica de front-end)
	-Buscador: contiene un input que filtra mientras 	escribes, la búsqueda es por nombre del profesional y 	es insensible a mayúsculas/minusculas
	-Filtros: contiene botones interactivos que filtra por 	categoría (diseño, desarrollo, marketing y todos sin 	necesidad de recargar la página)
	-Favoritos: se representa mediante un icono de corazón, 	que al presionarlo, cambia de color a rojo indicando 	que pertenece a la sección de favoritos
- PHP (lógica de back-end)
	-Define el array de talento con información completa 	(simulando una base de datos)

