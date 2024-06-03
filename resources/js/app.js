import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    agregarMenu();
    enviarMenuPorWssp();
}
);

const carrito = [];
const agregarMenu = () => {

    const btnComprar = document.querySelector('#btn-comprar');

    btnComprar.addEventListener('click', () => {
        const dataProducto = btnComprar.dataset.producto;
        const dataProductoJson = JSON.parse(dataProducto);

        carrito.push(dataProductoJson);
        console.log('carrito', carrito);

        const btnWssp = document.querySelector('#wssp');
        btnWssp.classList.remove('d-none');
    });
}


const enviarMenuPorWssp = () => {
    const btnWssp = document.querySelector('#wssp');
    btnWssp.addEventListener('click', () => {
        console.log('click en wssp');

        let mensaje = 'Hola, quiero hacer un pedido:\n';

        carrito.forEach((menu) => {
            menu.precio = parseFloat(menu.precio);
            mensaje += `*${menu.nombre} de S/${menu.precio.toFixed(2)}*\n`;
        });

        mensaje += `*Total: S/${calcularTotal().toFixed(2)}*`;

        const url = `https://api.whatsapp.com/send?phone=51993712770&text=${encodeURIComponent(mensaje)}`;

        window.open(url, '_blank');
    });
}

const calcularTotal = () => {
    let total = 0;
    carrito.forEach((menu) => {
        total += menu.precio;
    });

    return total;
}
