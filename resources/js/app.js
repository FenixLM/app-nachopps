// import './bootstrap';


// console.log('Hello World!');

// // string = caracteres '' ""
// // number = números
// // objeto = {} => carteristicas de un elemento
// const aula = {
//     nombre: 'lab informatica',
//     capacidad: 20,
//     horario: '8:00 - 10:00',
//     numero: 308
// }


// const carrito = [];

// const menus = [
//     {
//         id: 1,
//         nombre: 'Lasaña de Carne',
//         descripcion: 'Deliciosa lasaña de carne con salsa de tomate casera y queso gratinado.',
//         precio: 10.00,
//         imagen: 'assets/img/lasaña-2.jpg'
//     },
//     {
//         id: 2,
//         nombre: 'Anticuchos',
//         descripcion: 'Tradicionales brochetas de corazón de res marinadas y acompañadas de papas doradas.',
//         precio: 20.00,
//         imagen: 'assets/img/anticucho-1.jpg'
//     },
//     {
//         id: 3,
//         nombre: 'Pizza Hawaiana',
//         descripcion: 'Pizza con base de salsa de tomate, jamón, piña y abundante queso mozzarella.',
//         precio: 30.00,
//         imagen: 'assets/img/pizza-3.jpg'
//     },
//     {
//         id: 4,
//         nombre: 'Sudado de Mero',
//         descripcion: 'Mero cocido al vapor con hierbas frescas y vegetales, servido en una deliciosa salsa.',
//         precio: 40.00,
//         imagen: 'assets/img/sudadomero-1.jpg'
//     },
//     {
//         id: 5,
//         nombre: 'Leche de Tigre',
//         descripcion: 'Refrescante y picante mezcla de pescado fresco marinado en limón con cebolla y ají.',
//         precio: 50.00,
//         imagen: 'assets/img/leche-3.jpg'
//     },
//     {
//         id: 6,
//         nombre: 'Parihuela',
//         descripcion: 'Sopa de mariscos al estilo peruano, con un toque picante y especias aromáticas.',
//         precio: 60.00,
//         imagen: 'assets/img/parihuela-2.jpg'
//     }
// ]

// console.log(menus);

// const menuElement = document.getElementById('menus-container');

// menus.forEach((menu) => {
//     console.log('menu desde for each', menu);

//     //utilizamos string template para crear el html
//     const cardElement = `
//     <div class="card">
//         <div class="card-img">
//             <img src="${menu.imagen}" alt="">
//         </div>
//         <div class="card-body">
//             <h4 class="text-center">${menu.nombre}</h4>
//             <div class="mt-1">
//                 <p> <strong> Descripcion:</strong> ${menu.descripcion}</p>
//                 <p><strong>Precio:</strong> S/${menu.precio.toFixed(2)}</p>
//             </div>
//         </div>
//         <div class="m-1 text-center">
//             <button type="button" class="btn btn-primary" onclick="comprar(${menu.id})">Comprar</button>
//         </div>
//     </div>
//     `;
//     menuElement.innerHTML += cardElement;

//     // const cardElement = document.createElement('div');
//     // cardElement.classList.add('card');

//     // const cardContainerImageElement = document.createElement('div');
//     // cardContainerImageElement.classList.add('card-img');

//     // const cardImageElement = document.createElement('img');
//     // cardImageElement.src = menu.imagen;

//     // cardContainerImageElement.appendChild(cardImageElement);
//     // cardElement.appendChild(cardContainerImageElement);


//     // const cardContainerBodyElement = document.createElement('div');
//     // const h4BodyElement = document.createElement('h4');
//     // h4BodyElement.classList.add('text-center');
//     // h4BodyElement.textContent = menu.nombre;

//     // const descriptionBodyElement = document.createElement('div');
//     // descriptionBodyElement.classList.add('mt-1');
//     // descriptionBodyElement.innerHTML = `
//     // <p>${menu.descripcion}</p>
//     // <p>${menu.precio}</p>
//     // `;


//     // cardContainerBodyElement.appendChild(h4BodyElement);
//     // cardContainerBodyElement.appendChild(descriptionBodyElement);

//     // cardElement.appendChild(cardContainerBodyElement);


//     // menuElement.appendChild(cardElement);
// })

// function comprar(idMenu) {
//     console.log('comprar', idMenu);
//     // para complicarnos la vida

//     //filter => retorna un nuevo arreglo con los elementos que cumplan la condicion
//     //find => retorna el primer elemento que cumpla la condicion

//     const menu = menus.find((menu) => menu.id === idMenu);
//     console.log('menu encontrado', menu);


//     carrito.push(menu);
//     console.log('carrito', carrito);

//     const btnWssp = document.getElementById('wssp');
//     btnWssp.classList.remove('d-none');

// }


// const btnWssp = document.getElementById('wssp');
// function calcularTotal() {
//     let total = 0;
//     carrito.forEach((menu) => {
//         total += menu.precio;
//     });

//     return total;
// }
// btnWssp.addEventListener('click', () => {
//     console.log('click en wssp');

//     let mensaje = 'Hola, quiero hacer un pedido:\n';

//     carrito.forEach((menu) => {
//         mensaje += `*${menu.nombre} de S/${menu.precio.toFixed(2)}*\n`;
//     });

//     mensaje += `*Total: S/${calcularTotal().toFixed(2)}*`;

//     const url = `https://api.whatsapp.com/send?phone=51993712770&text=${encodeURIComponent(mensaje)}`;

//     window.open(url, '_blank');
// });


