const baseURL = location.origin + '/admin/'

const baseFetch = async (endpoint, params = false) => {
	try {
		let url = new URL(baseURL + endpoint)
		let searchParams;
		
		if(params) {
			searchParams = Qs.stringify(params, {encode: false})//new URLSearchParams(params.map(e => [e[0], e[1]]))
			url.search = searchParams
		}
		
		console.log(url)
		
		const req = await fetch(url, {
			headers: {
				'Accept': 'application/json'
			}
		})
		
		if(!req.ok) throw new Error('')
		const result = await req.json()
		return result
	} catch(err) {
		console.log(err)
		throw err
	}
}

const basePost = async (endpoint, data = {}) => {
	try {
		const url = new URL(baseURL + endpoint)
		
		const req = await fetch(url, {
			headers: {
				'Accept': 'application/json',
                'Content-Type': 'application/json'
			},
            method: 'POST',
            body: JSON.stringify(data)
		})
		
		if(!req.ok) throw new Error('')
		const result = await req.json()
		return result
	} catch(err) {
		console.log(err)
		throw err
	}
}

const baseDelete = async (endpoint) => {
	try {
		const url = new URL(baseURL + endpoint)
		
		const req = await fetch(url, {
			headers: {
				'Accept': 'application/json'
			},
            method: 'DELETE',
		})
		
		if(!req.ok) throw new Error('')
		const result = await req.json()
		return result
	} catch(err) {
		console.log(err)
		throw err
	}
}

const createQueryString = (initialFilterData) => {
	const qs = initialFilterData.flatMap((param) =>
		Object.entries(param).flatMap(([key, arr]) =>
			  Array.isArray(arr) ? arr.map(({field}) => [encodeURIComponent(key), encodeURIComponent(field)]) : ([encodeURIComponent(key), arr])
		)
	)//.join('&');
	console.log(qs)
	return qs
}

const apiService = {
	user: {
		endpoint: 'users/',
		me: async function() {
			return await baseFetch(this.endpoint + 'me')
		},
		favorites: async function() {
			return await baseFetch(this.endpoint + 'me/favorites')
		},
	},
	pages: {
		endpoint: 'pages-list/',
		get: async function(params = false) {
			return await baseFetch(this.endpoint, params)
		},
		show: async function(pageId, params = false) {
			return await baseFetch(this.endpoint + pageId, params)
		},
        update: async function(pageId, data) {
			return await basePost(this.endpoint + pageId, data)
		},
		create: async function(data) {
			return await basePost(this.endpoint + 'new', data)
		},
		delete: async function(pageId) {
			return await baseDelete(this.endpoint + pageId)
		},
	},
	images: {
		endpoint: 'images/',
		delete: async function(pageId) {
			return await baseDelete(this.endpoint + pageId)
		},
	},
	files: {
		endpoint: 'page-files/',
		delete: async function(pageId) {
			return await baseDelete(this.endpoint + pageId)
		},
	}
}

export {apiService}