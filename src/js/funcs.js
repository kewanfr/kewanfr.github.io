// Fetch datas from the API

const fetchProjects = async () => {

  return new Promise(async (resolve, reject) => {
    try {
      fetch(PROJECTS_URL, {
        mode: 'no-cors'
      })
        .then(response => response.json())
        .then(data => {
          resolve(data);
        });

    } catch (error) {
      console.log(error);
      reject(error);
    }
  });
}

const fetchSkills = async () => {

  return new Promise(async (resolve, reject) => {
    try {
      fetch(SKILLS_URL, {
        mode: 'no-cors'
      })
        .then(response => response.json())
        .then(data => {
          resolve(data);
        });

    } catch (error) {
      console.log(error);
      reject(error);
    }
  });
}