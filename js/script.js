const prices = document.getElementsByClassName("price");
const prods = document.getElementsByClassName("prods");

let fp = 0;
let prod = "";

function createProduct() {
    const container = document.createElement("div");
    container.classList.add("flex");

    const label1 = document.createElement("label");
    label1.textContent = "Insira o produto: ";
    const input1 = document.createElement("input");
    input1.classList.add("prods");
    input1.setAttribute("type", "text");
    input1.setAttribute("name", 'prod');

    const label2 = document.createElement("label");
    label2.textContent = "Insira o preço: ";
    const input2 = document.createElement("input");
    input2.classList.add("price");
    input2.setAttribute("type", "text");
    input2.setAttribute("name", 'price');

    label1.appendChild(input1);
    label2.appendChild(input2);

    container.appendChild(label1);
    container.appendChild(label2);

    document.getElementById("products").appendChild(container);
}

function calcPrice() {
    fp = 0;

    for (let i = 0; i < prices.length; i++) {
        if (prices[i].value != "" || prices[i].value != null) {
            fp += parseFloat(prices[i].value)
            prod += prods[i].value + " ";    
        }
    }

    document.getElementById("fp").textContent = "R$" + fp;
    document.getElementById("total_price").value = fp;
    document.getElementById("products_data").value = prod;

    document.getElementById("saleInput").style.display = "block";
}
