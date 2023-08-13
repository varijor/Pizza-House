const pizzaSelect = document.getElementById('type');
const priceInput = document.getElementById('price');
const baseInput = document.getElementById('base');
const selectedOption = pizzaSelect.options[pizzaSelect.selectedIndex];
const price = selectedOption.dataset.price;
const base = selectedOption.dataset.base;
priceInput.value = price;
baseInput.value = base;
pizzaSelect.addEventListener('change', () => {
    const selectedOption = pizzaSelect.options[pizzaSelect.selectedIndex];
    const price = selectedOption.dataset.price;
    priceInput.value = price;
    const base = selectedOption.dataset.base;
    baseInput.value = base;
});