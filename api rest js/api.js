//get
var request = new XMLHttpRequest()
request.open('GET', 'http://localhost:8080/api/tutorial/1.0/employees', true)
request.onload = function () {
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((nome) => {
		const get = document.getElementById('tabella')
    })
  } else {
	  console.log('error')
  }
}

request.send()


//post
var request = new XMLHttpRequest()
request.open('GET', 'http://localhost:8080/api/tutorial/1.0/employees', true)
request.onload = function () {
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((nome) => {
		const post = document.createElement('tr')
		const post = document.createElement('td')
		td.textContent = nome.firstName
		
		const post = document.createElement('td')
		td.textContent = nome.lastName
		
		const post = document.createElement('td')
		td.textContent = nome.email
		
		const post = document.createElement('td')
		td.textContent = nome.phone
		
    })
  } else {
	  console.log('error')
  }
}

request.send()


//delete
var request = new XMLHttpRequest()
request.open('GET', 'http://localhost:8080/api/tutorial/1.0/employees/2', true)
request.onload = function () {
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((nome) => {
		const obj = document.getElementById('tr2')
		obj.remove();
    })
  } else {
	  console.log('error')
  }
}

request.send()



//patch
var request = new XMLHttpRequest()
request.open('GET', 'http://localhost:8080/api/tutorial/1.0/employees/2', true)
request.onload = function () {
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((nome) => {
		const obj = document.getElementById('tr2')
    })
  } else {
	  console.log('error')
  }
}

request.send()


//put
var request = new XMLHttpRequest()
request.open('GET', 'http://localhost:8080/api/tutorial/1.0/employees/2', true)
request.onload = function () {
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((nome) => {
		const obj = document.getElementById('tr2')
    })
  } else {
	  console.log('error')
  }
}

request.send()