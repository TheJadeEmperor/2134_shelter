document.addEventListener('DOMContentLoaded', function () {
  const calendarEl = document.getElementById('calendar');
  const modal = document.getElementById('event-modal');
  const closeBtn = document.querySelector('.close-btn');
  const modalTitle = document.getElementById('modal-title');
  const modalDesc = document.getElementById('modal-description');

  fetch('events.json')
    .then(response => {
      if (!response.ok) throw new Error('Failed to load events.json');
      return response.json();
    })
    .then(events => {
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: events,
        eventClick: function (info) {
          modalTitle.innerText = info.event.title;
          modalDesc.innerHTML = info.event.extendedProps.description || 'No description.';
          modal.style.display = 'block';
        }
      });

      calendar.render();
    })
    .catch(error => {
      console.error('Calendar error:', error);
      alert('Could not load events.');
    });

  closeBtn.onclick = () => modal.style.display = 'none';
  window.onclick = (e) => {
    if (e.target === modal) modal.style.display = 'none';
  };
});
