const name=document.getElementById('prenom')
const name=document.getElementById('nom')
const name=document.getElementById('login')
const name=document.getElementById('password')
const name=document.getElementById('conf')


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