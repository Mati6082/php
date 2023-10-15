let chleb = document.querySelector("#chleb")
let bulki = document.querySelector("#bułki")
let bagietki = document.querySelector("#bagietki")
let koszyk = document.querySelector("#koszyk")
let zamowienie = document.querySelector("#zamowienie")
let zamknijZamowienie = document.querySelector("#zamknijZamowienie")

let iloscChleba = 0
let iloscBulek = 0
let iloscBagietek = 0

chleb.addEventListener("click", () => {
    let ile = prompt("Podaj ilość chleba (wartość liczbowa):", "0")
    if (Number(ile) && ile > 0) {
        iloscChleba += Number(ile)
    } else alert("Podano nieprawidłową wartość.")
})

bulki.addEventListener("click", () => {
    let ile = prompt("Podaj ilość bułek (wartość liczbowa):", "0")
    if (Number(ile) && ile > 0) {
        iloscBulek += Number(ile)
    } else alert("Podano nieprawidłową wartość.")
})

bagietki.addEventListener("click", () => {
    let ile = prompt("Podaj ilość bagietek (wartość liczbowa):", "0")
    if (Number(ile) && ile > 0) {
        iloscBagietek += Number(ile)
    } else alert("Podano nieprawidłową wartość.")
})

koszyk.addEventListener("click", () => {
    zamowienie.style.transform = "translate(-50%, -50%)"
    zamowienie.querySelector("input[name='chleb']").value = iloscChleba
    zamowienie.querySelector("input[name='bułki']").value = iloscBulek
    zamowienie.querySelector("input[name='bagietki']").value = iloscBagietek

})

zamknijZamowienie.addEventListener("click", () => {
    zamowienie.style.transform = "translate(-50%, -250vh)"
})
