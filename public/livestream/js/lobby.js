let form = document.getElementById('lobby__form')



form.addEventListener('submit', (e) => {
    e.preventDefault()

    let inviteCode = "admin"
    window.location = `/admin/livestream/room=${inviteCode}`
})




