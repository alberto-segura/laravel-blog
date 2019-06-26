$(document).ready(function() {
  // searches across any array/object of searchable objects
  var categoryContent = [
    { category: 'South America', title: 'Brazil' },
    { category: 'South America', title: 'Peru' },
    { category: 'North America', title: 'Canada' },
    { category: 'Asia',          title: 'South Korea' },
    { category: 'Asia',          title: 'Japan' },
    { category: 'Asia',          title: 'China' },
    { category: 'Europe',        title: 'Denmark' },
    { category: 'Europe',        title: 'England' },
    { category: 'Europe',        title: 'France' },
    { category: 'Europe',        title: 'Germany' },
    { category: 'Africa',        title: 'Ethiopia' },
    { category: 'Africa',        title: 'Nigeria' },
    { category: 'Africa',        title: 'Zimbabwe' }
  ];

  $('.ui.search')
    .search({
      source: categoryContent,
      searchFields: ['category','title'],
      fullTextSearch: false
    });
    $('.accordion')
    .accordion({
      selector: {
        trigger: '.title .icon'
      }
    });
});
