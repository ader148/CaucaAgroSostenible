-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2021 a las 05:58:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caucaAgroSostenibleBD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimiento`
--

CREATE TABLE `emprendimiento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `redes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `emprendimiento`
--

INSERT INTO `emprendimiento` (`id`, `nombre`, `descripcion`, `imagen`, `redes`, `created_at`, `updated_at`) VALUES
(3, 'HéroesDelAgro', 'Matilde es hija de la pandemia, la emergencia sanitaria obligó a Lina a reinventar su emprendimiento y a descubrir en las redes una nueva plataforma para generar ventas, pero la alejó de una de la cosas que más le gusta: el contacto con la gente.', '/storage/emprendimientos/ouLvmBqjfpddXAPTJdPBlDeP8vTSESaMi6pUDYxb.png', 'MATILDELINAPOPAYAN', '2021-10-04 02:14:12', '2021-10-04 02:14:12'),
(4, 'Cerro Brujo', 'Iniciativa proba con más de 8 años de trayectoria y que impulsa los emprendimientos de la Caficultura Caucana. Aún estás a tiempo de conocer y disfrutar de los cafés de nuestro departamento. Ubicados en Calle 8N #8 -11 del barrio Santa Clara en Popayán.', '/storage/emprendimientos/nJSthrCG8oM7IjOWvWLb9ZOI16W6F4d075ekQo4s.png', 'CERROBRUJOPOPYAN', '2021-10-04 02:18:57', '2021-10-04 02:18:57'),
(5, 'DelCaucaATuMesa', 'En nuestro campo se cosechan productos de excelente calidad, por eso desde #DelCaucaATuMesa llegamos hasta la puerta sus hogares con combos llenos de sabor Caucano.', '/storage/emprendimientos/tieydU2nLWOSUOjSrPMCPDiRlB7qCDnQbdoMStDn.png', 'SECAAGROCAUCA', '2021-10-04 02:20:15', '2021-10-04 02:20:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `nombre`, `descripcion`, `ubicacion`, `fecha`, `imagen`, `created_at`, `updated_at`) VALUES
(3, 'EXPOFINCA SE HARÁ EN EL CENTRO DE CONVENCIONES PLAZA MAYOR MEDELLÍN', 'Según Wikipedia, un párrafo es un discurso contenido en una unidad de texto que comparte una misma idea o punto de vista. Un párrafo se compone de una o más frases. Aunque se contempla como norma en ningún idioma, los párrafos se emplean en la escritura formal para organizar textos extensos.', '2.442138,-76.605772', '2021-10-31 17:30:00', '/storage/eventos/FzDwKnCXSdpXgzfGFVRnQhzlKF4oGi0fmjN0CWe5.png', '2021-10-04 02:25:03', '2021-10-04 02:25:03'),
(4, 'EXPOFINCA SE HARÁ EN EL CENTRO DE CONVENCIONES PLAZA MAYOR MEDELLÍN', 'Entre el 29 de abril y 3 de mayo, en el Centro de Convenciones Plaza Mayor Medellín, se celebrará Expofinca, un espacio pensado para empresarios, productores y amantes de los animales que busca reunir las tradiciones alrededor del campo. La feria tendrá, entre otros, exhibiciones, competencias y una zona de aprendizaje.', '2.451078,-76.599742', '2021-11-18 21:34:00', '/storage/eventos/RXsHFpe1cu4korHSRKGmqnEtJs8D4tigQDUSkj2n.png', '2021-10-04 02:36:47', '2021-10-04 02:36:47'),
(5, 'DEMOSTRACIÓN DE BIOPLAGUICIDA EN LA LECHUGA', 'El próximo miércoles 25 de marzo Agrosavia presentará una demostración de método y resultados del bioplaguicida Tricotec en cultivos de lechuga del Suroccidente Nariñense. El evento contará con María Victoria Zuluaga, Carlos Moreno, Eliana Revelo Gómez y David Dorado como conferencistas.', '2.488380,-76.562234', '2021-12-17 20:42:00', '/storage/eventos/KZCdb4P9nZke7OVNYaeDK9GuooU9JNiqcZQnKCmP.png', '2021-10-04 02:39:27', '2021-10-04 02:39:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversionista`
--

CREATE TABLE `inversionista` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inversionista`
--

INSERT INTO `inversionista` (`id`, `nombre`, `imagen`, `descripcion`, `correo`, `telefono`, `created_at`, `updated_at`) VALUES
(7, 'Fundación Bavaria', '/storage/inversionistas/VVCyUhfzyyiflgPxZ0mDC2aR0sy2ikdQlzbbM0zA.png', 'Desarrolla programas de inversión social y emprendimiento que contribuyen con la generación de ingresos, la reducción de pobreza, el mejoramiento de la calidad de vida de las comunidades y el progreso de Colombia.', 'bavaria@mail.com', '654654', '2021-10-04 01:51:55', '2021-10-04 01:51:55'),
(8, 'Terra Capital', '/storage/inversionistas/86CHSO6kfJNZ2qDxcZ4oBo2TFSHK7cFCVbu0Obzk.png', 'El Fondo Terra Bella Colombia está diseñado para movilizar inversiones de capital privado hacia la financiación de  producción agrícola de pequeños productores,  productos forestales no maderables y  mitigación del cambio climático en Colombia', 'info@terraglobalcapital.com', '7656755', '2021-10-04 01:55:18', '2021-10-04 01:55:18'),
(9, 'Cristina Mejía Candelo', '/storage/inversionistas/6jOaCyitczD1dh8NFvVH2VzFkiKrumhpExQnjEca.png', '“La agricultura debe ser el motor productivo de este país. Por eso es necesario contar con capacidades e infraestructura instalada en el campo. Apoyo iniciativas y emprendedores del agro colombiano.”', 'cmejia@agrapp.com', '3223423', '2021-10-04 02:07:24', '2021-10-04 02:07:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_10_202016_create_permission_tables', 1),
(6, '2021_09_10_211532_producto', 2),
(7, '2021_09_10_212102_oferta', 3),
(8, '2021_09_10_214125_emprendimiento', 3),
(9, '2021_09_10_214354_evento', 3),
(10, '2021_09_10_214615_inversionista', 3),
(11, '2021_09_26_192155_create_todos_table', 4),
(12, '2021_09_26_192231_create_carts_table', 4),
(14, '2021_09_26_204002_create_shopping_carts_table', 5),
(15, '2021_09_26_204104_create_shopping_cart_details_table', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descuento` double(8,2) DEFAULT NULL,
  `tipo_descuento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `nombre`, `imagen`, `cantidad`, `descuento`, `tipo_descuento`, `valor`, `created_at`, `updated_at`) VALUES
(3, 'Hasta 20% OFF en Vegetales', '/storage/ofertas/SABmDk3tBG77yOpuII459pSCZwC5ljg3UGUqonHQ.jpg', 1, 20.00, 'porcentaje', NULL, '2021-10-04 08:44:21', '2021-10-04 08:44:21'),
(4, '10% OFF en Frutas', '/storage/ofertas/Y56jKRgow0lYVjm2yov2IekVHZJRyI2oU23cAoRQ.jpg', 1, 10.00, 'porcentaje', NULL, '2021-10-04 08:45:14', '2021-10-04 08:45:14'),
(5, 'Disfruta de 5% Adicional Realizando tu compra mayor a $500.000', '/storage/ofertas/vKGf5geXBOWaFK4dDJ0Fxv2bKXctjnGQQrxbSYRL.png', 1, 5.00, 'porcentaje', NULL, '2021-10-04 08:46:44', '2021-10-04 08:46:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin.home', 'web', '2021-09-11 01:52:29', '2021-09-11 01:52:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `descripcion` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `imagen`, `cantidad`, `precio`, `descripcion`, `created_at`, `updated_at`) VALUES
(9, 'Aguacate', '/storage/inversionistas/BAzUBlUi7yAyrt9ZT9Bd5SP4uQZenqn8Pi2ODR8H.jpg', 1, 5000.00, 'Este producto es de color verdoso y de piel fina o gruesa. El árbol, que se llama aguacatero, puede llegar a medir hasta veinte metros de altura. Sus hojas son verdes y grandes, las flores son diminutas y amarillas y de ellas nacen los aguacates.', '2021-10-04 01:17:47', '2021-10-04 01:17:47'),
(10, 'Banano', '/storage/inversionistas/6pD0pI2p9bvhrjDYzybVGCOYHh9gUWQ2uStT9UZO.jpg', 1, 3000.00, 'Por ser especie Musa, el tallo carece de tronco verdadero. Este es suplantado por profusas vainas foliares llamadas pseudotallos, parecidos a fustes erguidos, que llegan a alcanzar hasta 30 cm de diámetro en su base. No son leñosos y crecen hasta 7 metros de altura.', '2021-10-04 01:20:02', '2021-10-04 01:20:02'),
(11, 'Papa Criolla', '/storage/inversionistas/Ang29pMR02O8E2Rzjx3kscye37H96QKtM2XdDhT5.jpg', 1, 15000.00, 'La papa criolla amarilla, originaria de Colombia, es un tubérculo de piel delgada y de color amarillo. Tiene un gran valor alimenticio ya que es una fuente rica en proteína, carbohidratos, potasio, vitaminas y minerales.', '2021-10-04 01:21:31', '2021-10-04 01:21:31'),
(12, 'Papaya', '/storage/inversionistas/K2Q4XSAJqHZq9C34vtfXMBZsqZOy9eQE4ZIruDJY.jpg', 1, 3000.00, 'La papaya es una fruta tropical que se consume por su pulpa principalmente, que suele ser de color anaranjado y de sabor dulce y jugoso. También se aprovechan sus semillas secas. Se puede tomar como fruta fresca, cocida o en diversos preparados como helados, refrescos y jaleas. Es un alimento bajo en calorías y altamente digestivo.', '2021-10-04 01:27:04', '2021-10-04 01:27:04'),
(13, 'Brocoli', '/storage/inversionistas/s8OXikXrFQKsr3GA7YHz7G81Roi9jeq1xEr7S9bT.jpg', 1, 5000.00, 'Brócoli - Información general. El bróculi es una hortaliza de la familia de las coles. Su consumo aumenta constantemente, ya que es un alimento sano y que admite múltiples preparaciones. Tiene un agradable sabor y es rico en vitaminas y minerales, además de ser bajo en calorías.', '2021-10-04 01:30:55', '2021-10-04 01:30:55'),
(14, 'Zanahoria', '/storage/inversionistas/nbgSCBzIW89wdBhgE04cA0p5QuJMg6Nn1loKVUAq.jpg', 1, 2000.00, 'Los frutos de la zanahoria tienen cerdas largas, curvadas, que ayudan a la propagación de la planta, ya que se adhieren al pelaje de los animales. ... Cuando crece cada dos años, la zanahoria almacena alimento para la producción de flores y semillas durante su primer período de crecimiento.', '2021-10-04 01:31:50', '2021-10-04 01:31:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-09-11 01:52:29', '2021-09-11 01:52:29'),
(2, 'User', 'web', '2021-09-11 01:52:29', '2021-09-11 01:52:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('ACTIVE','PENDING','APROVED','FINISHED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `shopping_carts`
--

INSERT INTO `shopping_carts` (`id`, `status`, `user_id`, `order_date`, `created_at`, `updated_at`) VALUES
(1095, 'ACTIVE', NULL, NULL, '2021-10-04 01:32:12', '2021-10-04 01:32:12'),
(1096, 'ACTIVE', NULL, NULL, '2021-10-04 02:05:28', '2021-10-04 02:05:28'),
(1097, 'ACTIVE', NULL, NULL, '2021-10-04 02:05:28', '2021-10-04 02:05:28'),
(1098, 'ACTIVE', NULL, NULL, '2021-10-04 02:25:20', '2021-10-04 02:25:20'),
(1099, 'ACTIVE', NULL, NULL, '2021-10-04 02:25:20', '2021-10-04 02:25:20'),
(1100, 'ACTIVE', NULL, NULL, '2021-10-04 02:26:21', '2021-10-04 02:26:21'),
(1101, 'ACTIVE', NULL, NULL, '2021-10-04 02:26:21', '2021-10-04 02:26:21'),
(1102, 'ACTIVE', NULL, NULL, '2021-10-04 02:27:45', '2021-10-04 02:27:45'),
(1103, 'ACTIVE', NULL, NULL, '2021-10-04 02:27:46', '2021-10-04 02:27:46'),
(1104, 'ACTIVE', NULL, NULL, '2021-10-04 02:27:47', '2021-10-04 02:27:47'),
(1105, 'ACTIVE', NULL, NULL, '2021-10-04 02:28:10', '2021-10-04 02:28:10'),
(1106, 'ACTIVE', NULL, NULL, '2021-10-04 02:28:10', '2021-10-04 02:28:10'),
(1107, 'ACTIVE', NULL, NULL, '2021-10-04 02:29:56', '2021-10-04 02:29:56'),
(1108, 'ACTIVE', NULL, NULL, '2021-10-04 02:29:57', '2021-10-04 02:29:57'),
(1109, 'ACTIVE', NULL, NULL, '2021-10-04 02:30:09', '2021-10-04 02:30:09'),
(1110, 'ACTIVE', NULL, NULL, '2021-10-04 02:30:10', '2021-10-04 02:30:10'),
(1111, 'ACTIVE', NULL, NULL, '2021-10-04 02:30:10', '2021-10-04 02:30:10'),
(1112, 'ACTIVE', NULL, NULL, '2021-10-04 02:30:40', '2021-10-04 02:30:40'),
(1113, 'ACTIVE', NULL, NULL, '2021-10-04 02:30:41', '2021-10-04 02:30:41'),
(1114, 'ACTIVE', NULL, NULL, '2021-10-04 02:30:41', '2021-10-04 02:30:41'),
(1115, 'ACTIVE', NULL, NULL, '2021-10-04 02:39:51', '2021-10-04 02:39:51'),
(1116, 'ACTIVE', NULL, NULL, '2021-10-04 02:39:52', '2021-10-04 02:39:52'),
(1117, 'ACTIVE', NULL, NULL, '2021-10-04 08:13:32', '2021-10-04 08:13:32'),
(1118, 'ACTIVE', NULL, NULL, '2021-10-04 08:48:14', '2021-10-04 08:48:14'),
(1119, 'ACTIVE', NULL, NULL, '2021-10-04 08:48:14', '2021-10-04 08:48:14'),
(1120, 'ACTIVE', NULL, NULL, '2021-10-04 08:51:30', '2021-10-04 08:51:30'),
(1121, 'ACTIVE', NULL, NULL, '2021-10-04 08:51:30', '2021-10-04 08:51:30'),
(1122, 'ACTIVE', NULL, NULL, '2021-10-04 08:51:32', '2021-10-04 08:51:32'),
(1123, 'ACTIVE', NULL, NULL, '2021-10-04 08:52:07', '2021-10-04 08:52:07'),
(1124, 'ACTIVE', NULL, NULL, '2021-10-04 08:52:07', '2021-10-04 08:52:07'),
(1125, 'ACTIVE', NULL, NULL, '2021-10-04 08:52:08', '2021-10-04 08:52:08'),
(1126, 'ACTIVE', NULL, NULL, '2021-10-04 08:52:27', '2021-10-04 08:52:27'),
(1127, 'ACTIVE', NULL, NULL, '2021-10-04 08:52:28', '2021-10-04 08:52:28'),
(1128, 'ACTIVE', NULL, NULL, '2021-10-04 08:52:28', '2021-10-04 08:52:28'),
(1129, 'ACTIVE', NULL, NULL, '2021-10-04 08:53:01', '2021-10-04 08:53:01'),
(1130, 'ACTIVE', NULL, NULL, '2021-10-04 08:53:01', '2021-10-04 08:53:01'),
(1131, 'ACTIVE', NULL, NULL, '2021-10-04 08:53:02', '2021-10-04 08:53:02'),
(1132, 'ACTIVE', NULL, NULL, '2021-10-04 08:53:54', '2021-10-04 08:53:54'),
(1133, 'ACTIVE', NULL, NULL, '2021-10-04 08:53:54', '2021-10-04 08:53:54'),
(1134, 'ACTIVE', NULL, NULL, '2021-10-04 08:53:55', '2021-10-04 08:53:55'),
(1135, 'ACTIVE', NULL, NULL, '2021-10-04 08:55:29', '2021-10-04 08:55:29'),
(1136, 'ACTIVE', NULL, NULL, '2021-10-04 08:55:29', '2021-10-04 08:55:29'),
(1137, 'ACTIVE', NULL, NULL, '2021-10-04 08:55:30', '2021-10-04 08:55:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopping_cart_details`
--

CREATE TABLE `shopping_cart_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` decimal(8,2) NOT NULL,
  `shopping_cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `shopping_cart_details`
--

INSERT INTO `shopping_cart_details` (`id`, `quantity`, `price`, `shopping_cart_id`, `product_id`, `created_at`, `updated_at`) VALUES
(20, 1, '5000.00', 1095, 9, '2021-10-04 01:32:28', '2021-10-04 01:32:28'),
(21, 1, '3000.00', 1095, 10, '2021-10-04 01:32:35', '2021-10-04 01:32:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alvaro', 'alvaro@mail.com', NULL, '$2y$10$59qk2/6hhB8TULXPan0IPuVn6bdM1VvAI9JcwzPrSkkyubU.cEp1S', NULL, '2021-09-11 01:52:29', '2021-09-11 01:52:29'),
(2, 'Kevin', 'kevin@mail.com', NULL, '$2y$10$X.Y6jilhiiTBbvUyE7CybutC/VPtfH2ZW1HNj4AdK9y3XY0n5cVuS', NULL, '2021-09-11 01:52:30', '2021-09-11 01:52:30'),
(3, 'Administrador', 'admin@admin.com', NULL, '$2y$10$4fSkcF.h2oNYsrg/jH..DurvIOPCZt4s/QwL/95MsBNvslV/2GRH2', NULL, '2021-09-11 01:52:30', '2021-09-11 01:52:30'),
(5, 'daniel', 'daniel@mail.com', NULL, '$2y$10$vAhEfa6n5jDGwu5ZoIbTE.LEt57Cp33ncqjCp9XBAF.cLYSLee8E2', NULL, '2021-09-12 03:33:15', '2021-09-12 03:33:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emprendimiento`
--
ALTER TABLE `emprendimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `inversionista`
--
ALTER TABLE `inversionista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `shopping_cart_details`
--
ALTER TABLE `shopping_cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_cart_details_shopping_cart_id_foreign` (`shopping_cart_id`),
  ADD KEY `shopping_cart_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `emprendimiento`
--
ALTER TABLE `emprendimiento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inversionista`
--
ALTER TABLE `inversionista`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1138;

--
-- AUTO_INCREMENT de la tabla `shopping_cart_details`
--
ALTER TABLE `shopping_cart_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `shopping_cart_details`
--
ALTER TABLE `shopping_cart_details`
  ADD CONSTRAINT `shopping_cart_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `shopping_cart_details_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_carts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
