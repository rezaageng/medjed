const element1 = document.getElementById('search')
const targetElement1 = document.getElementById('admin-news')

if (element1 && targetElement1) {
  element1.addEventListener('keyup', async () => {
    try {
      const response = await fetch(
        `../components/admin.news.php?search=${element1.value}`
      )
      const data = await response.text()
      targetElement1.innerHTML = data
    } catch (error) {
      console.error(error)
    }
  })
}

const quill = new Quill('#rte', {
  theme: 'snow',
})

const form = document.getElementById('admin-news-form')

if (form) {
  form.addEventListener('submit', () => {
    const content = document.getElementById('content')

    content.value = quill.root.innerHTML
  })
}
