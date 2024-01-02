const refs = {
  buttonFilter: document.querySelectorAll('.portfolio button'),
  projects: document.querySelectorAll('.portfolio__container'),
};

refs.buttonFilter.forEach(button => {
  button.addEventListener('click', () => {
    const btnCategory = button.dataset.category;

    refs.projects.forEach(project => {
      const projectCategory = project.dataset.category;
      if (btnCategory === 'all' || btnCategory === projectCategory) {
        return (project.style.display = 'block');
      }
      return (project.style.display = 'none');
    });
  });
});
