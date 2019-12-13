require('./bootstrap');

require('./plugins/jqScribble')

const options = {
  backgroundImage: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576252972/moip_direct_entry_assessment/case%202/Exercise%201/OBS-reference_hhz4yl.jpg',
  brushColor: '#FF2D00',
  brushSize: 4
}

document.querySelector('.saveImage').addEventListener('click', saveImage)
document.querySelector('.clearImage').addEventListener('click', clearImage)

function saveImage (e) {
  e.preventDefault()

  $("#warmFront").data("jqScribble").save(async (imageData) => {
    let response = await axios.post('/cases/case-two/image', { imageData })

    console.log(response.data)
  })
}

async function clearImage (e) {
  e.preventDefault()

  await $("#warmFront").data("jqScribble").clear()

  await $("#warmFront").data("jqScribble").update({backgroundImage: options.backgroundImage});
}

$('#warmFront').jqScribble(options);