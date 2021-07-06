// window.location.href = "src/pages/follow.html"
const story_container = document.querySelector('.story-container')
const story = document.querySelector('.story-container').innerHTML


for (let i = 0; i <= 8; i++) {
    story_container.innerHTML += story
}

const card_container = document.querySelector('.card-container')
const card = document.querySelector('.card-container').innerHTML
for (let i = 1; i <= 2; i++) {
    card_container.innerHTML += card
}