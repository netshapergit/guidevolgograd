export function getLastPath(url) {
  url = new URL(url);
  const pathname = url.pathname; 
  const paths = pathname.split("/"); 
  return paths.pop() || paths.pop();
}

export function parseJSON(s, d = {}) {
    try {
        if(!s) throw new Error('Empty input')
        return JSON.parse(s)
    } catch(err) {
        console.log(err)
        return d
    }
}

export function debounce(fn, wait){
    let timer;
    return function(...args) {
        if(timer) {
            clearTimeout(timer);
        }
        const context = this;
        timer = setTimeout(() => {
            fn.apply(context, args);
        }, wait);
    }
}

export async function uploadImage(e) {
	try {
	// добавить эту функцию на обработчик @change к input[type="file"]
	let img = e.target.files[0]
	let formData = new FormData()
	formData.append("file", img)
	return await fetch('/admin/upload_images', {
		method: "POST", body: formData
	}).then(r => r.json())
		.then(data => {
			if(data.error) throw new Error(data.error)
			return data.fileName
		})
	} catch(error) {
		console.log(error)
		throw error
	}
}

export async function uploadFile(e) {
	try {
	// добавить эту функцию на обработчик @change к input[type="file"]
	let img = e.target.files[0]
	let formData = new FormData()
	formData.append("file", img)
	return await fetch('/admin/upload_files', {
		method: "POST", body: formData
	}).then(r => r.json())
		.then(data => {
			if(data.error) throw new Error(data.error)
			return data.fileName
		})
	} catch(error) {
		console.log(error)
		throw error
	}
}