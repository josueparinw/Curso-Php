# Ejercicio — POO con PHP y HTML

## Descripción

Vamos a practicar POO creando un catálogo de videojuegos con diseño. El resultado será una página web con varias secciones, usando clases y un método `filter()` para decidir qué se pinta.

---

## Estructura de archivos

```
/ejercicio-poo
│
├── index.php
│
├── classes/
│   └── Videojuego.php
│
├── partials/
│   ├── header.php
│   ├── nav.php
│   └── footer.php
│
└── img/
```

---

## Clase — `classes/Videojuego.php`

Propiedades privadas: `id`, `titulo`, `genero`, `precio`, `puntuacion`, `imagen`, `stock`.

Debe tener:

- Constructor que reciba todas las propiedades
- Getters para todas las propiedades
- Setters con validación para `precio` (mayor que 0) y `puntuacion` (entre 0 y 10)
- Método `tieneStock()` — devuelve `true` si el stock es mayor que 0
- Método `aplicarDescuento($porcentaje)` — devuelve el precio con el descuento aún el criterio:
plicado
- Método `filter($criterio)` — devuelve `true` o `false` seg
```php
$juego->filter("recomendado");  // true si puntuacion >= 8
$juego->filter("oferta");       // true si precio <= 20
$juego->filter("disponible");   // true si stock > 0
```

- Método `pintarTarjeta()` — genera el HTML de la tarjeta del juego. Si el stock es 0 muestra una etiqueta "Sin stock"

---

## `index.php`

Incluye la clase y los partials. Crea un array con mínimo 6 objetos `Videojuego`. La página tendrá tres secciones:

### Sección 1 — Todos los juegos
Pinta todos los juegos con `pintarTarjeta()`.

### Sección 2 — Recomendados
Pinta solo los juegos donde `filter("recomendado")` sea `true`.

### Sección 3 — En oferta
Pinta solo los juegos donde `filter("oferta")` sea `true`, mostrando el precio con un 20% de descuento usando `aplicarDescuento(20)`.

El patrón a usar en cada sección:

```php
foreach ($juegos as $juego) {
    if ($juego->filter("recomendado")) {
        $juego->pintarTarjeta();
    }
}
```

---

## Requisitos técnicos

- Todas las propiedades deben ser `private`
- `filter()` es el único punto de decisión para mostrar o no una tarjeta
- Diseño propio con tarjetas, imagen, sombra y bordes redondeados

---

## Puntos extra

- Que las tarjetas en oferta muestren el precio original tachado y el precio con descuento en otro color
- Mostrar en cada sección el número de juegos que se están pintando
- Añadir en el nav el número total de juegos del catálogo