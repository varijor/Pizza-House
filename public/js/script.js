const pizzaSelect = document.getElementById('type');
const priceInput = document.getElementById('price');
const selectedOption = pizzaSelect.options[pizzaSelect.selectedIndex];
const price = selectedOption.dataset.price;
priceInput.value = price;
pizzaSelect.addEventListener('change', () => {
    const selectedOption = pizzaSelect.options[pizzaSelect.selectedIndex];
    const price = selectedOption.dataset.price;
    priceInput.value = price;
});