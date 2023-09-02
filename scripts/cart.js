// Verificar todos os botões "X" do documento
var removeCartItemBtn = document.getElementsByClassName('btn-danger')

// Remover produtos do carrinho
for (var i = 0; i < removeCartItemBtn.length; i++) {
    var btn = removeCartItemBtn[i]
    btn.addEventListener('click', removeCartItem)
}

var quantityInputs = document.getElementsByClassName('cart-quantity-input') //Quantidade de algum produto no carrinho

for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i]
    input.addEventListener('change', quantityChanged)
}

// Verificar todos os botões de "Adicionar ao carrinho" do documento
var addToCartBtn = document.getElementsByClassName('btn-cart-add')

for (var i = 0; i < addToCartBtn.length; i++) {
    var btn = addToCartBtn[i]
    btn.addEventListener('click', addToCartClicked)
}

document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)

//Funções
function purchaseClicked() {
    alert('Obrigado pela compra!')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()){
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var btnClicked = event.target
    btnClicked.parentElement.parentElement.remove()
    updateCartTotal()
}
//Verificar se a quantidade inserida é menor que 1 não é um número
function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var btn = event.target
    var shopItem = btn.parentElement.parentElement
    var name = shopItem.getElementsByClassName('shop-item-name')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText

    addItemToCart(name, price)
    updateCartTotal()
}

function addItemToCart(name, price) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-name')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == name) {
            alert('Este produto já está no carrinho')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <span class="cart-item-name">${name}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">X</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

//Mudança de preço do carrinho com a retirada de produtos
function updateCartTotal() {
    var cartItemsContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemsContainer.getElementsByClassName('cart-row')
    var total = 0

    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]

        var price = parseFloat(priceElement.innerText.replace('€', ''))
        var quantity = quantityElement.value
        total += (price * quantity)
    }
    total = Math.round(total * 100) / 100 //Arredondar o total para duas casas decimais

    document.getElementsByClassName('cart-total-price')[0].innerText = total + '€'
}