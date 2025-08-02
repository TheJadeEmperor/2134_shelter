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
          modal.style.display = 'flex';
        },

        validRange: {
          start: '2024-07-01' // absolute lower limit
        },
        datesSet: function (arg) {
          const currentDate = calendar.getDate();
          const minBlocked = new Date('2024-08-01');
          const maxBlocked = new Date('2025-04-01');
          const julDate = new Date('2024-07-01');

          // Block if in Aug 2024 - Feb 2025
          if (currentDate >= minBlocked && currentDate < maxBlocked) {
            if (lastDate && currentDate < lastDate) {
              // going backwards: send to July
              calendar.gotoDate(julDate);
            } else {
              // going forwards into blocked range: send to March
              calendar.gotoDate(maxBlocked);
            }
          }

          lastDate = currentDate;
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
