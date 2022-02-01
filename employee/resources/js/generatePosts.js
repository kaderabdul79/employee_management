let viewAllPosts = document.getElementById('viewAllPosts')

viewAllPosts.addEventListener('click',fetchPosts())

function fetchPosts(){
    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(res => res.json())
    .then(data => console.log(data))
}
