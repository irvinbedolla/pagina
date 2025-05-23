function mensaje() {

  swal.fire({
    title: 'Título',
    text: 'Mensaje de texto',
    html: '<p>Mensaje de texto con <strong>formato</strong>.</p>',
    type: 'success',
    timer: 3000,
  });
}

$("#btn1").click(function(){
				Swal.fire("Ejemplo");
				});

const { value: fruit } = await Swal.ubicacion({
  title: 'Select field validation',
  input: 'select',
  inputOptions: {
    'Fruits': {
      apples: 'Apples',
      bananas: 'Bananas',
      grapes: 'Grapes',
      oranges: 'Oranges'
    },
    'Vegetables': {
      potato: 'Potato',
      broccoli: 'Broccoli',
      carrot: 'Carrot'
    },
    'icecream': 'Ice cream'
  },
  inputPlaceholder: 'Select a fruit',
  showCancelButton: true,
  inputValidator: (value) => {
    return new Promise((resolve) => {
      if (value === 'oranges') {
        resolve()
      } else {
        resolve('You need to select oranges :)')
      }
    })
  }
})

if (fruit) {
  Swal.fire(`You selected: ${fruit}`)
}


