const nextButton = document.querySelector(".btn-next")
const prevButton = document.querySelector('.btn-prev')
const steps = document.querySelectorAll(".step")
const formSteps = document.querySelectorAll(".form-step")
const submit = document.querySelector(".btn-submit")
const inputs = document.querySelectorAll('input')
const date = document.querySelectorAll('.grouping')
const pass = document.getElementById('pass')
const compass = document.getElementById('com_pass')
const day = document.getElementById('day')
const month = document.getElementById('month')
const year = document.getElementById('year')
let active = 1

nextButton.addEventListener(`click`, ()=>{
    active++
    if(active > steps.length){
        active = steps.length
    }
    updateProgress()
})

prevButton.addEventListener(`click`, ()=>{
    active--
    if(active < 1){
        active = 1
    }
    updateProgress()
})

const updateProgress = () =>{
    console.log("steps length = " + steps.length)
    console.log("active = " + active)
    console.log(inputs)

    steps.forEach((step , i) =>{
        if(i == [active-1]){
            step.classList.add("active")
            formSteps[i].classList.add("active")
        }
        else{
            step.classList.remove("active")
            formSteps[i].classList.remove("active")
        }
    })

    if(active === 1){
        prevButton.disabled = true
        submit.disabled = true
    }
    else if(active === steps.length){
        nextButton.disabled = true
        submit.disabled = false
    }
    else{
        prevButton.disabled = false
        nextButton.disabled = false
        submit.disabled = true
    }
}

submit.addEventListener(`click`, function(e){
    inputs.forEach((input,i)=>{
        if(input.value===""){
            e.preventDefault()
            input.style.borderColor = "red"
        }
    })
    if(pass.value !== compass.value){
        alert("password not match")
        e.preventDefault()
    }
    else if(day.value > 31 || month.value > 12 || year.value > 2024){
        alert("enter valid dates")
        e.preventDefault()
    }      
})