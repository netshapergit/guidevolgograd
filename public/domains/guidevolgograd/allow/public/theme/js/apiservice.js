const baseURL = location.origin + '/api/'

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

const basePost = async (endpoint, data) => {
	try {
		let url = new URL(baseURL + endpoint)
		/*
		let searchParams;
		
		if(params) {
			searchParams = Qs.stringify(params, {encode: false})//new URLSearchParams(params.map(e => [e[0], e[1]]))
			url.search = searchParams
		}
		
		console.log(url)
		*/
		const req = await fetch(url, {
			method: 'POST',
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			},
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
	  	routes: async function(data, params) {
			return await baseFetch(this.endpoint + 'me/routes', params)
		},
	},
	pages: {
		endpoint: 'pages/',
		get: async function(params = false) {
			return await baseFetch(this.endpoint, params)
		},
		show: async function(pageId, params = false) {
			return await baseFetch(this.endpoint + pageId, params)
		},
		
	},
	cities: {
		endpoint: 'cities/',
		data: async function(params = false) {
			return await baseFetch(this.endpoint, params)
		},
		get: async function(params = false) {
			return await baseFetch(this.endpoint, params)
		},
	},
	routes: {
		endpoint: 'routes/',
		createOrUpdate: async function(data) {
			console.log('createOrUpdate', )
			if(data.data.id) {
				//console.log(data.id)
				return await basePost(this.endpoint + data.data.id, data)
			}
			return await basePost(this.endpoint, data)
		},
	}
}

export {apiService}