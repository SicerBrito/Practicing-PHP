const criptomonedas = {
    BTC: 1000,
    ETH: 2000,
    BNB: 3000,
    XRP: 4000,
    ADA: 5000,
    DOGE: 6000
};

const selectElement = document.getElementById('opt');
const valorElement = document.getElementById('valor');
const cantidadElement = document.getElementById('cantidad');
const totalElement = document.getElementById('total');

selectElement.addEventListener('change', () => {
    const selectedOption = selectElement.value;
    const selectedPrice = criptomonedas[selectedOption];
    valorElement.textContent = selectedPrice;
    calculateTotal(selectedPrice);
});

cantidadElement.addEventListener('input', () => {
    const selectedOption = selectElement.value;
    const selectedPrice = criptomonedas[selectedOption];
    calculateTotal(selectedPrice);
});

function calculateTotal(price) {
    const cantidad = cantidadElement.value;
    const total = price * cantidad;
    totalElement.textContent = total;
}

function confirmarCompra() {
    return confirm("¿Desea realizar esta compra?");
}

const form = document.querySelector('form');
form.addEventListener('submit', confirmarCompra);