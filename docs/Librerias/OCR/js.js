const options = {
  method: 'POST',
  headers: {
    'content-type': 'application/json',
    'X-RapidAPI-Host': 'text-in-images-recognition.p.rapidapi.com',
    'X-RapidAPI-Key': '20576b470dmshf3246cb63624f43p1f8dddjsn60382e328bf6'
  },
  body: '{"objectUrl":"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.periodicolaperla.com%2Fwp-content%2Fuploads%2F2017%2F07%2F4452359007_6f72c29bdf_b-949x635.jpg&f=1&nofb=1"}'
};

fetch('https://text-in-images-recognition.p.rapidapi.com/prod', options)
  .then(response => response.json())
  .then(response => console.log(response))
  .catch(err => console.error(err));