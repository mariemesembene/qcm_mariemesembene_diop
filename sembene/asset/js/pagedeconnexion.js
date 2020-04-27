const name=document.getElementById('login')
const name=document.getElementById('pwd')
const form=document.getElementById('form')
const errorElement=document.getElementById('erreur')

form.addEventListener('connexion',(e)=>{
    let messages=[]
    if(name.value===''|| name.value==null){
        messages.push('login obligatoire')
    }
    if(messages.length >0){
        e.preventDefault()
        errorElement.innerText=messages.join(',')
    }


}