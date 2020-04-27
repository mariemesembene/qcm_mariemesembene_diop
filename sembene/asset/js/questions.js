const name=document.getElementById("textarea-questions")
const name=document.getElementById('nb-points')
const name=document.getElementById("select")
const name=document.getElementById("SEMBENE")



const form=document.getElementById('form')
const errorElement=document.getElementById('erreur')

form.addEventListener('submit',(e)=>{
    let messages=[]
    if(name.value===''|| name.value==null){
        messages.push('champ obligatoire')
    }
    if(messages.length >0){
        e.preventDefault()
        errorElement.innerText=messages.join(',')
    }


})