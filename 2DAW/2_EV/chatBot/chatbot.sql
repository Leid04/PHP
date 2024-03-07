-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2024 a las 13:40:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chatbot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(500) NOT NULL,
  `replies` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'muebles decoraciones', 'Aqui estan los mejores muebles'),
(2, '¿Qué es Git?', 'Git es un sistema de control de versiones distribuido ampliamente utilizado para el desarrollo de software.'),
(3, '¿Cómo puedo clonar un repositorio en Git?', 'Puedes clonar un repositorio Git usando el comando \"git clone URL\".'),
(4, '¿Cómo puedo agregar archivos al área de preparación en Git?', 'Puedes agregar archivos al área de preparación usando el comando \"git add nombre_del_archivo\".'),
(5, '¿Cuál es el comando para confirmar cambios en Git?', 'El comando para confirmar cambios en Git es \"git commit\".'),
(6, '¿Cómo puedo enviar cambios a un repositorio remoto en Git?', 'Puedes enviar cambios a un repositorio remoto usando el comando \"git push\".'),
(7, '¿Cómo puedo obtener los últimos cambios del repositorio remoto en Git?', 'Puedes obtener los últimos cambios del repositorio remoto usando el comando \"git pull\".'),
(8, '¿Qué es un conflicto de fusión en Git?', 'Un conflicto de fusión en Git ocurre cuando dos ramas tienen cambios que no se pueden combinar automáticamente.'),
(9, '¿Cómo puedo resolver un conflicto de fusión en Git?', 'Puedes resolver un conflicto de fusión manualmente editando los archivos afectados y luego realizando un commit.'),
(10, '¿Qué es una rama en Git?', 'Una rama en Git es una línea de desarrollo independiente que permite trabajar en características aisladas sin afectar la rama principal.'),
(11, '¿Cómo puedo crear una nueva rama en Git?', 'Puedes crear una nueva rama en Git usando el comando \"git branch nombre_de_la_rama\".'),
(12, '¿Qué es un commit en Git?', 'Un commit en Git representa un conjunto de cambios en un repositorio, con un mensaje descriptivo asociado.'),
(13, '¿Cómo puedo ver el historial de commits en Git?', 'Puedes ver el historial de commits en Git usando el comando \"git log\".'),
(14, '¿Cómo puedo revertir cambios en Git?', 'Puedes revertir cambios en Git usando el comando \"git revert\".'),
(20, '¿Qué es un repositorio remoto en Git?', 'Un repositorio remoto en Git es una versión de tu proyecto alojada en Internet o en un servidor.'),
(21, '¿Cómo puedo configurar un repositorio remoto en Git?', 'Puedes configurar un repositorio remoto en Git usando el comando \"git remote add nombre_remoto URL\".'),
(22, 'push', 'El comando \"push\" en Git se utiliza para subir cambios locales a un repositorio remoto.'),
(23, 'pull', 'El comando \"pull\" en Git se utiliza para obtener y fusionar cambios desde un repositorio remoto.'),
(24, 'commit', 'El comando \"commit\" en Git se utiliza para guardar los cambios realizados en el repositorio local.'),
(25, 'branch', 'El comando \"branch\" en Git se utiliza para crear, listar o borrar ramas en el repositorio.'),
(26, 'merge', 'El comando \"merge\" en Git se utiliza para combinar los cambios de una rama con otra rama o con la rama actual.'),
(27, 'clone', 'El comando \"clone\" en Git se utiliza para crear una copia local de un repositorio remoto.'),
(28, 'checkout', 'El comando \"checkout\" en Git se utiliza para cambiar entre diferentes ramas o versiones de archivos.'),
(29, 'status', 'El comando \"status\" en Git se utiliza para mostrar el estado actual del repositorio y los archivos no seguimientos.'),
(30, 'log', 'El comando \"log\" en Git se utiliza para ver el historial de commits en el repositorio.'),
(31, 'fetch', 'El comando \"fetch\" en Git se utiliza para descargar los cambios desde un repositorio remoto pero no fusionarlos con el repositorio local.'),
(32, 'reset', 'El comando \"reset\" en Git se utiliza para deshacer cambios en el repositorio local.'),
(33, 'revert', 'El comando \"revert\" en Git se utiliza para deshacer un commit específico creando un nuevo commit con los cambios revertidos.'),
(34, 'remote', 'El comando \"remote\" en Git se utiliza para gestionar los repositorios remotos asociados con el repositorio local.'),
(35, 'tag', 'El comando \"tag\" en Git se utiliza para crear, listar o borrar tags (etiquetas) en el repositorio.'),
(36, 'diff', 'El comando \"diff\" en Git se utiliza para mostrar las diferencias entre archivos o commits.'),
(37, 'config', 'El comando \"config\" en Git se utiliza para configurar opciones de Git como el nombre de usuario, correo electrónico, etc.'),
(39, 'stash', 'El comando \"stash\" en Git se utiliza para guardar temporalmente los cambios no comprometidos para trabajar en otra cosa y luego recuperarlos más tarde.'),
(41, 'blame', 'El comando \"blame\" en Git se utiliza para ver quién ha modificado cada línea de un archivo y en qué commit se realizó el cambio.'),
(42, 'rebase', 'El comando \"rebase\" en Git se utiliza para reorganizar la historia del repositorio, aplicando los commits de una rama sobre otra.'),
(43, 'cherry-pick', 'El comando \"cherry-pick\" en Git se utiliza para aplicar un commit específico de una rama a otra.'),
(44, 'squash', 'El comando \"squash\" en Git se utiliza para combinar múltiples commits en uno solo durante un proceso de fusión.'),
(45, 'amend', 'El comando \"amend\" en Git se utiliza para modificar el último commit con nuevos cambios o un mensaje de commit.'),
(46, 'bisect', 'El comando \"bisect\" en Git se utiliza para encontrar el commit que introdujo un problema en el código mediante una búsqueda binaria.'),
(47, 'submodule', 'El comando \"submodule\" en Git se utiliza para incluir otros repositorios como submódulos dentro de un repositorio principal.'),
(55, 'ignore', 'El archivo \".gitignore\" en Git se utiliza para especificar archivos y directorios que deben ser ignorados por Git.'),
(56, 'init', 'El comando \"init\" en Git se utiliza para inicializar un repositorio Git en un directorio.'),
(192, 'sdfg', 'sdfg'),
(234, 'git blame', 'El comando \"blame\" en Git se utiliza para ver quién ha modificado cada línea de un archivo y en qué commit se realizó el cambio.'),
(235, 'git bisect', 'El comando \"bisect\" en Git se utiliza para encontrar el commit que introdujo un problema en el código mediante una búsqueda binaria.'),
(236, 'git cherry-pick', 'El comando \"cherry-pick\" en Git se utiliza para aplicar un commit específico de una rama a otra.'),
(237, 'git clean', 'El comando \"clean\" en Git se utiliza para eliminar archivos no rastreados y directorios del directorio de trabajo.'),
(238, 'git describe', 'El comando \"describe\" en Git se utiliza para mostrar el commit más reciente que coincide con un patrón específico de etiquetas.'),
(239, 'git filter-branch', 'El comando \"filter-branch\" en Git se utiliza para reescribir la historia del proyecto aplicando filtros a los commits.'),
(240, 'git format-patch', 'El comando \"format-patch\" en Git se utiliza para generar archivos de parche para enviar por correo electrónico.'),
(241, 'git gc', 'El comando \"gc\" en Git se utiliza para realizar una recolección de basura para optimizar el repositorio.'),
(242, 'git grep', 'El comando \"grep\" en Git se utiliza para buscar patrones en los archivos del repositorio.'),
(243, 'git instaweb', 'El comando \"instaweb\" en Git se utiliza para lanzar un servidor web para explorar el repositorio a través de un navegador.'),
(244, 'git pull --rebase', 'El comando \"pull --rebase\" en Git se utiliza para obtener cambios desde un repositorio remoto y reorganizar la historia local mediante un rebase.'),
(245, 'git reflog', 'El comando \"reflog\" en Git se utiliza para mostrar el registro de referencia de HEAD, útil para recuperar cambios perdidos.'),
(246, 'git reflow', 'El comando \"reflow\" en Git se utiliza para realizar un flujo de trabajo de código basado en ramas y pull requests.'),
(247, 'git remote prune', 'El comando \"remote prune\" en Git se utiliza para eliminar referencias locales a ramas eliminadas en el repositorio remoto.'),
(248, 'git request-pull', 'El comando \"request-pull\" en Git se utiliza para generar un resumen de cambios para enviar a un mantenedor de repositorio remoto.'),
(249, 'git shortlog', 'El comando \"shortlog\" en Git se utiliza para resumir los cambios del repositorio agrupados por autor.'),
(250, 'git submodule update', 'El comando \"submodule update\" en Git se utiliza para actualizar los submódulos a la última confirmación registrada.'),
(251, 'git update-index', 'El comando \"update-index\" en Git se utiliza para modificar la información del índice.'),
(252, 'git verify-tag', 'El comando \"verify-tag\" en Git se utiliza para verificar la validez de una firma de etiqueta Git.'),
(253, 'git whatchanged', 'El comando \"whatchanged\" en Git se utiliza para mostrar los commits y los cambios asociados.'),
(254, 'git worktree', 'El comando \"worktree\" en Git se utiliza para gestionar múltiples árboles de trabajo asociados con un mismo repositorio.'),
(255, 'git rebase -i', 'El comando \"rebase -i\" en Git se utiliza para realizar un rebase interactivo, que permite reordenar, combinar o editar commits.'),
(256, 'git reflog expire', 'El comando \"reflog expire\" en Git se utiliza para eliminar entradas antiguas del registro de referencia de HEAD.'),
(257, 'git rebase --onto', 'El comando \"rebase --onto\" en Git se utiliza para reorganizar una secuencia de commits basada en un nuevo punto de inicio.'),
(258, 'git rerere', 'El comando \"rerere\" en Git se utiliza para recordar cómo se resolvieron conflictos de fusión en el pasado para aplicar automáticamente soluciones similares.'),
(259, 'git stash apply', 'El comando \"stash apply\" en Git se utiliza para aplicar los cambios guardados en la pila de stash.'),
(260, 'git reflog delete', 'El comando \"reflog delete\" en Git se utiliza para eliminar entradas específicas del registro de referencia de HEAD.'),
(261, 'git remote set-url', 'El comando \"remote set-url\" en Git se utiliza para cambiar la URL de un repositorio remoto existente.'),
(262, 'git stash drop', 'El comando \"stash drop\" en Git se utiliza para eliminar un conjunto específico de cambios guardados en la pila de stash.'),
(263, 'git merge --abort', 'El comando \"merge --abort\" en Git se utiliza para abortar una fusión en progreso y volver al estado anterior.'),
(264, 'git reflog expire --expire-unreachable=now --all', 'El comando \"reflog expire --expire-unreachable=now --all\" en Git se utiliza para eliminar todas las entradas de reflog no alcanzables.'),
(265, 'git reflog show', 'El comando \"reflog show\" en Git se utiliza para mostrar las entradas del registro de referencia de HEAD.'),
(266, 'git remote show', 'El comando \"remote show\" en Git se utiliza para mostrar información detallada sobre un repositorio remoto.'),
(267, 'git rerere forget', 'El comando \"rerere forget\" en Git se utiliza para eliminar las soluciones recordadas para conflictos de fusión pasados.'),
(268, 'git stash list', 'El comando \"stash list\" en Git se utiliza para mostrar todos los conjuntos de cambios guardados en la pila de stash.'),
(269, 'git branch -d', 'El comando \"branch -d\" en Git se utiliza para eliminar una rama local después de fusionar sus cambios.'),
(270, 'git merge --squash', 'El comando \"merge --squash\" en Git se utiliza para fusionar cambios de una rama en otra sin crear un commit de fusión.'),
(271, 'git reflog expire --expire=now --all', 'El comando \"reflog expire --expire=now --all\" en Git se utiliza para eliminar todas las entradas del registro de referencia de HEAD.'),
(272, 'git rebase -p', 'El comando \"rebase -p\" en Git se utiliza para preservar las marcas de fusión durante un rebase.'),
(273, 'git remote prune origin', 'El comando \"remote prune origin\" en Git se utiliza para eliminar referencias locales a ramas eliminadas en el repositorio remoto \"origin\".'),
(274, 'git rev-parse', 'El comando \"rev-parse\" en Git se utiliza para analizar objetos de referencia y generar identificadores de objeto.'),
(275, 'git revert --no-commit', 'El comando \"revert --no-commit\" en Git se utiliza para deshacer un commit específico sin crear un nuevo commit.'),
(276, 'git remote rename', 'El comando \"remote rename\" en Git se utiliza para cambiar el nombre de un repositorio remoto existente.'),
(277, 'git stash pop', 'El comando \"stash pop\" en Git se utiliza para aplicar y eliminar los cambios guardados en la pila de stash.'),
(278, 'git remote rm', 'El comando \"remote rm\" en Git se utiliza para eliminar un repositorio remoto existente.'),
(279, 'git shortlog -sn', 'El comando \"shortlog -sn\" en Git se utiliza para mostrar un resumen de los commits agrupados por autor y ordenados por el número de commits.'),
(280, 'git submodule foreach', 'El comando \"submodule foreach\" en Git se utiliza para ejecutar comandos en cada submódulo del repositorio.'),
(281, 'git tag -a', 'El comando \"tag -a\" en Git se utiliza para crear una etiqueta anotada, que incluye un mensaje asociado.'),
(282, 'git verify-pack', 'El comando \"verify-pack\" en Git se utiliza para verificar la integridad de un archivo de índice y generar estadísticas sobre los objetos almacenados en él.'),
(283, 'git worktree add', 'El comando \"worktree add\" en Git se utiliza para agregar un nuevo árbol de trabajo asociado con el mismo repositorio.'),
(284, 'git rebase --skip', 'El comando \"rebase --skip\" en Git se utiliza para omitir un commit durante un rebase.'),
(285, 'git reset --hard', 'El comando \"reset --hard\" en Git se utiliza para restablecer el repositorio al estado de un commit específico, eliminando todos los cambios posteriores.'),
(286, 'git rebase --abort', 'El comando \"rebase --abort\" en Git se utiliza para abortar un rebase en progreso y volver al estado anterior.'),
(287, 'git reflog expire --expire-unreachable=now --all', 'El comando \"reflog expire --expire-unreachable=now --all\" en Git se utiliza para eliminar todas las entradas del registro de referencia de HEAD.'),
(288, 'git stash clear', 'El comando \"stash clear\" en Git se utiliza para eliminar todos los cambios guardados en la pila de stash.'),
(289, 'git update-ref', 'El comando \"update-ref\" en Git se utiliza para actualizar las referencias de objetos en el repositorio.'),
(290, 'git rerere clear', 'El comando \"rerere clear\" en Git se utiliza para eliminar todas las soluciones recordadas para conflictos de fusión pasados.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
