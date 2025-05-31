# 🧠 Ejercicios de Programación Orientada a Objetos en PHP

Este repositorio contiene ejercicios de nivel 1 centrados en la **Programación Orientada a Objetos (POO)** en PHP. En esta actividad se eleva un poco el nivel de complejidad, abordando temas como clases base, herencia, atributos y polimorfismo a través de comportamientos diferenciados.

---

## 📚 Ejercicios incluidos

### ✅ Ejercicio 1: `Animal` con comportamiento diferenciado

Crea una clase base `Animal` con:

- Atributo: `nombre`
- Método constructor que recibe el nombre como parámetro
- Método `habla()` definido como interfaz común para todos los animales

Luego se definen dos subclases:

- `Perro`: implementa el método `habla()` y muestra un mensaje como: `"Guau! Soy [nombre]"`
- `Gato`: implementa el método `habla()` y muestra un mensaje como: `"¡Mío! Soy [nombre]"`

> 💡 Este ejercicio refuerza los conceptos de herencia y polimorfismo, permitiendo que subclases redefinan comportamientos de una clase base.

---

## 🛠 Requisitos

- PHP 7.4 o superior  
- Editor de texto o IDE compatible (VS Code, PhpStorm, etc.)

---

## 📦 Instalación

git clone <https://github.com/Antonia90/1.5-POO.git>

cd tema5_poo

## Ejecución para visualizar los ejercicios

Asegúrate de que el servidor PHP esté corriendo (opcional, recomendado): php -S localhost:8000

Abre tu navegador y accede a: <http://localhost:8000/poo_nivel_1.php>

O simplemente abre el archivo ejercicios_nivel_1.php directamente en tu navegador (funciona para scripts simples).
