/**
 * @type {{Accept: string, 'Content-Type': string}}
 */
const headers = {
  'Accept': 'application/json',
  'Content-Type': 'application/json'
}

/**
 * @return {Promise}
 */
export function fetchRecords () {
  const init = {
    method: 'GET',
    headers
  }
  return fetch('api/', init).then((response) => response.json())
}

/**
 * @param id
 * @return {Promise}
 */
export function fetchRecord (id) {
  const init = {
    method: 'GET',
    headers
  }
  return fetch(`api?id=${id}`, init).then((response) => response.json())
}

export function saveRecord (record) {
  const init = {
    method: 'POST',
    headers,
    body: JSON.stringify(record)
  }
  return fetch('api/', init).then((response) => response.json())
}
