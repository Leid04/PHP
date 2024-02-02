-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2024 a las 09:43:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(80) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`) VALUES
(100001, 'Martillo', 'Martillo de acero forjado con mango de madera', 20),
(100002, 'Taladro eléctrico', 'Taladro con cable de alta potencia', 80),
(100003, 'Llave ajustable', 'Llave ajustable de 10 pulgadas', 15),
(100004, 'Cinta métrica', 'Cinta métrica de 5 metros', 9),
(100005, 'Destornillador plano', 'Destornillador plano de cabeza magnética', 6),
(100006, 'Alicate de punta', 'Alicate de punta fina para trabajos precisos', 13),
(100007, 'Sierra de mano', 'Sierra de mano con dientes afilados', 19),
(100008, 'Clavos de acero', 'Clavos de acero galvanizado de 2 pulgadas (paquete de 100)', 5),
(100009, 'Tornillos para madera', 'Tornillos para madera de 3 pulgadas (paquete de 50)', 7),
(100010, 'Pintura en aerosol', 'Pintura en aerosol de secado rápido (color negro)', 7),
(100011, 'Linterna LED', 'Linterna LED resistente al agua', 13),
(100012, 'Guantes de trabajo', 'Guantes de trabajo resistentes al corte', 10),
(100013, 'Candado de combinación', 'Candado de combinación de 4 dígitos', 16),
(100014, 'Chapa para puerta', 'Chapa para puerta con llave', 30),
(100015, 'Pala de jardín', 'Pala de jardín con mango de madera', 17),
(100016, 'Regla de medición', 'Regla de medición de aluminio de 12 pulgadas', 5),
(100017, 'Cinta adhesiva', 'Cinta adhesiva multiusos (paquete de 3)', 4),
(100018, 'Llave inglesa', 'Llave inglesa de 8 pulgadas', 11),
(100019, 'Clavo de cabeza redonda', 'Clavo de cabeza redonda de 1.5 pulgadas (paquete de 200)', 5),
(100020, 'Sierra circular', 'Sierra circular de alta potencia', 90),
(100021, 'Escuadra de carpintero', 'Escuadra de carpintero de acero inoxidable', 8),
(100022, 'Tijeras de corte', 'Tijeras de corte para uso general', 5),
(100023, 'Soplete de gas', 'Soplete de gas recargable', 12),
(100024, 'Pinceles para pintura', 'Pinceles para pintura de varios tamaños (juego de 5)', 9),
(100025, 'Cinta de aislar', 'Cinta de aislar eléctrica (rollo de 10 metros)', 3),
(100026, 'Atornillador inalámbrico', 'Atornillador inalámbrico recargable', 30),
(100027, 'Mosquetones', 'Mosquetones de acero inoxidable (paquete de 3)', 7),
(100028, 'Lija de grano fino', 'Lija de grano fino para madera (paquete de 10)', 7),
(100029, 'Pinzas para ropa', 'Pinzas para ropa resistentes (paquete de 24)', 4),
(100030, 'Organizador de herramientas', 'Organizador de herramientas de pared', 25),
(100031, 'Chaqueta de seguridad', 'Chaqueta de seguridad reflectante', 19),
(100032, 'Pala de nieve', 'Pala de nieve resistente con mango ergonómico', 23),
(100033, 'Abrazaderas de metal', 'Abrazaderas de metal de 4 pulgadas (paquete de 6)', 10),
(100034, 'Linterna de cabeza', 'Linterna de cabeza con luz LED ajustable', 15),
(100035, 'Desatascador de tuberías', 'Desatascador de tuberías de goma', 8),
(100036, 'Martillo de goma', 'Martillo de goma de doble cara', 16),
(100037, 'Pinzas de resorte', 'Pinzas de resorte para sujetar firmemente', 6),
(100038, 'Candado de seguridad', 'Candado de seguridad resistente con llave', 20),
(100039, 'Caja de herramientas', 'Caja de herramientas resistente con asa', 35),
(100040, 'Taladro inalámbrico', 'Taladro inalámbrico de 18V con accesorios', 100),
(100041, 'Alargador eléctrico', 'Alargador eléctrico de 10 pies', 12),
(100042, 'Tarugo para pared', 'Tarugo para pared de 8 mm (paquete de 50)', 4),
(100043, 'Pintura para metal', 'Pintura para metal de alta resistencia (color plateado)', 16),
(100044, 'Escalera plegable', 'Escalera plegable de aluminio de 6 pies', 43),
(100045, 'Tornillos hexagonales', 'Tornillos hexagonales de acero inoxidable (paquete de 25)', 9),
(100046, 'Trapo de limpieza', 'Trapo de limpieza absorbente (paquete de 5)', 6),
(100047, 'Azada de jardín', 'Azada de jardín con mango de fibra de vidrio', 18),
(100048, 'Chapa para cajón', 'Chapa para cajón con llave', 13),
(100049, 'Manguera de jardín', 'Manguera de jardín resistente de 50 pies', 25),
(100050, 'Sierra de sable', 'Sierra de sable con hoja de corte ajustable', 29),
(100051, 'Brocas para metal', 'Brocas para metal de titanio (juego de 10)', 15),
(100052, 'Nivel de burbuja', 'Nivel de burbuja magnético de 24 pulgadas', 10),
(100053, 'Grasa lubricante', 'Grasa lubricante de alta temperatura (tubo de 8 oz)', 6),
(100054, 'Alicates de corte', 'Alicates de corte de alta resistencia', 16),
(100055, 'Escobillón para limpiar', 'Escobillón para limpiar con cerdas resistentes', 8),
(100056, 'Sierra de arco', 'Sierra de arco con hoja de acero templado', 13),
(100057, 'Cinta de teflón', 'Cinta de teflón para sellado de roscas', 4),
(100058, 'Herramienta multiusos', 'Herramienta multiusos con 15 funciones', 20),
(100059, 'Tarima de madera', 'Tarima de madera tratada de 2x4 pulgadas', 6),
(100060, 'Pulidora eléctrica', 'Pulidora eléctrica de 6 pulgadas', 50),
(100061, 'Linterna recargable', 'Linterna recargable con batería de larga duración', 23),
(100062, 'Cadena de acero', 'Cadena de acero galvanizado de 10 metros', 12),
(100063, 'Sierra de cinta', 'Sierra de cinta para trabajos precisos', 79),
(100064, 'Brochas para pintura', 'Brochas para pintura de calidad profesional (juego de 3)', 11),
(100065, 'Cinta métrica retráctil', 'Cinta métrica retráctil de 3 metros', 7),
(100066, 'Martillo de bola', 'Martillo de bola con mango de fibra de vidrio', 21),
(100067, 'Soplete de butano', 'Soplete de butano para soldadura', 30),
(100068, 'Cajas de almacenamiento', 'Cajas de almacenamiento resistentes (juego de 4)', 15),
(100069, 'Taladro percutor', 'Taladro percutor con función de martillo', 95),
(100070, 'Escoba de cerdas duras', 'Escoba de cerdas duras para exteriores', 13),
(100071, 'Aceite lubricante', 'Aceite lubricante multiusos (bote de 16 oz)', 8),
(100072, 'Cierre de puerta', 'Cierre de puerta resistente con cerrojo', 17),
(100073, 'Sierra de mano plegable', 'Sierra de mano plegable con hoja dentada', 18),
(100074, 'Pegamento para madera', 'Pegamento para madera de secado rápido (bote de 8 oz)', 7),
(100075, 'Tarugo expansivo', 'Tarugo expansivo de 10 mm (paquete de 30)', 5),
(100076, 'Alicate de presión', 'Alicate de presión con mandíbulas ajustables', 12),
(100077, 'Puntas para destornillador', 'Puntas para destornillador de 25 piezas (varios tipos)', 10),
(100078, 'Papel de lija', 'Papel de lija de grano medio (paquete de 50)', 7),
(100079, 'Cerradura para ventana', 'Cerradura para ventana con llave', 15),
(100080, 'Cinta adhesiva de doble cara', 'Cinta adhesiva de doble cara resistente (rollo de 15 metros)', 5),
(100081, 'Biseladora manual', 'Biseladora manual de alta precisión', 29),
(100082, 'Paleta de albañil', 'Paleta de albañil con mango de madera', 11),
(100083, 'Brocas para mampostería', 'Brocas para mampostería de carburo (juego de 6)', 13),
(100084, 'Tarima de composite', 'Tarima de composite resistente a la intemperie', 15),
(100085, 'Papel de aluminio', 'Papel de aluminio resistente al calor (rollo de 50 pies)', 8),
(100086, 'Clavo de cabeza plana', 'Clavo de cabeza plana de 2 pulgadas (paquete de 150)', 7),
(100087, 'Lija para lijadora orbital', 'Lija para lijadora orbital de grano fino (paquete de 15)', 10),
(100088, 'Escuadra magnética', 'Escuadra magnética para soldadura', 19),
(100089, 'Punta de destornillador', 'Punta de destornillador Phillips (paquete de 10)', 4),
(100090, 'Sierra de mano para podar', 'Sierra de mano para podar con cuchilla dentada', 15),
(100091, 'Mascarilla de seguridad', 'Mascarilla de seguridad con filtro (paquete de 5)', 9),
(100092, 'Trapo para limpiar herramienta', 'Trapo para limpiar herramientas de microfibra (paquete de 3)', 5),
(100093, 'Cinta métrica de ingeniero', 'Cinta métrica de ingeniero de 20 metros', 14),
(100094, 'Guantes de cuero', 'Guantes de cuero resistentes para trabajo pesado', 12),
(100095, 'Estuche para brocas', 'Estuche para brocas de plástico resistente', 8),
(100096, 'Cerradura para armario', 'Cerradura para armario con combinación', 13),
(100097, 'Tarugo de nailon', 'Tarugo de nailon de 6 mm (paquete de 40)', 4),
(100098, 'Caja de herramientas portátil', 'Caja de herramientas portátil con asa y cierres', 30),
(100099, 'Sierra de costilla', 'Sierra de costilla para cortes precisos', 27),
(100100, 'Lápiz de carpintero', 'Lápiz de carpintero con punta retráctil', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `store`
--

INSERT INTO `store` (`id`, `name`, `address`, `cp`) VALUES
(1, 'Fer', 'calle de bangla', 23452),
(8, 'Ferreteria3', 'calle de bufalo', 234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `store_product`
--

CREATE TABLE `store_product` (
  `id_product` int(11) NOT NULL,
  `id_store` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `store_product`
--

INSERT INTO `store_product` (`id_product`, `id_store`, `stock`) VALUES
(100001, 1, 50),
(100002, 1, 30),
(100003, 1, 75),
(100004, 8, 40),
(100005, 8, 60),
(100006, 8, 25),
(100007, 8, 15),
(100008, 8, 100),
(100009, 1, 80),
(100010, 1, 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `store_product`
--
ALTER TABLE `store_product`
  ADD PRIMARY KEY (`id_product`,`id_store`),
  ADD UNIQUE KEY `id_product` (`id_product`,`id_store`),
  ADD KEY `id_store` (`id_store`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `store_product`
--
ALTER TABLE `store_product`
  ADD CONSTRAINT `store_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `store_product_ibfk_2` FOREIGN KEY (`id_store`) REFERENCES `store` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
