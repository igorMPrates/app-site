import { Calendar } from "@fullcalendar/core";
import interactionPlugin from "@fullcalendar/interaction";
import googleCalendarPlugin from "@fullcalendar/google-calendar";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";
import allLocales from "@fullcalendar/core/locales-all";

jQuery(document).ready(function ($) {
  const calendarEl = document.getElementById("calendar");
  const eventSources = {
    eip: {
      googleCalendarId:
        'c_uuh3fg6f7bt7t3denecmcc3rik@group.calendar.google.com',
      color: '#D81B60',
    },
    eii: {
        googleCalendarId:
          'c_6nb70q59pcgq95fuaassdtq86k@group.calendar.google.com',
        color: '#A79B8E',
      },
    ef1i: {
      googleCalendarId:
        'c_2mismobntutm0s935u3fke6p14@group.calendar.google.com',
      color: '#F4511E',
    },
    ef1p: {
      googleCalendarId:
        'c_4k7eeqo667ub1n9oddruumofn0@group.calendar.google.com',
      color: '#009688',
    },
    ef2p: {
      googleCalendarId:
        'c_bcol8nro2o372vpjaqamlt5g0k@group.calendar.google.com',
      color: '#AD1457',
    },
    ef2i: {
      googleCalendarId:
        'c_adf3eta7hd34r779cu0kk48ihc@group.calendar.google.com',
      color: '#8E24AA',
    },
    em: {
      googleCalendarId: 'e.medio@escolamobile.com.br',
      color: '#039BE5',
    },
  };
  const initialEventSources = [];

  const calendarConfig = {
    plugins: [
      interactionPlugin,
      dayGridPlugin,
      timeGridPlugin,
      listPlugin,
      googleCalendarPlugin,
    ],
    locales: allLocales,
    locale: "pt-br",
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
    },
    navLinks: true,
    dayMaxEvents: true,
    contentHeight: 710,
    editable: false,
    eventClick: function (info) {
      event.preventDefault();
      const eventTitle = info.event.title;
      const eventStart = new Date(info.event.start).toLocaleString("pt-br", {
        timeZone: "America/Sao_Paulo",
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
      });
      const eventEnd = new Date(info.event.end).toLocaleString("pt-br", {
        timeZone: "America/Sao_Paulo",
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
      });
      const url = info.event.url;
      const eventColor = info.el.style.backgroundColor;

      $(".popupCalendar__item-content").append(`
        <div>
          <h2 style="display: flex; align-items: center; gap: 8px;">
            <div class="ball colorEm" style="background-color: ${eventColor}!important;"></div>
            ${eventTitle}
          </h2>
          <h5>${eventStart} a ${eventEnd}</h5>
        </div>
      `);
      $(".popupCalendar").removeClass("d-none");
    },
    googleCalendarApiKey: "AIzaSyDYBW31tQ7W5a_7H4tshZedTItX-BLdFVo",
    eventSources: initialEventSources,
  };

  const calendar = new Calendar(calendarEl, calendarConfig);

  $(".open-admission-accordion").on("click", function () {
    const calendarAccordion = $(this).closest(
      ".admission-accordion calendario"
    );

    if (calendarAccordion.hasClass("active")) {
      $(".admission-accordion calendario").removeClass("active");
      calendarAccordion.removeClass("active");
      $(".admission-accordion calendario").find(".content").slideUp();
      calendarAccordion.find(".content").slideUp();
    } else {
      $(".admission-accordion calendario").removeClass("active");
      calendarAccordion.addClass("active");
      $(".admission-accordion calendario").find(".content").slideUp();
      calendarAccordion.find(".content").slideDown();

      calendar.render();
      document.querySelector("style").textContent +=
        "@media screen and (max-width:767px) { .fc-toolbar.fc-header-toolbar {flex-direction:column;} .fc-toolbar-chunk { display: table-row; text-align:center; padding:5px 0; } }";
    }
  });

  $(".popupCalendar__closeButton").on("click", function (event) {
    event.preventDefault();

    $(".popupCalendar").addClass("d-none");
    $(".popupCalendar__item-content").empty();
  });

  $(".ckeckboxGroupFilter input").on("change", (event) => {
    const checkedCheckboxes = $(".ckeckboxGroupFilter input:checked");
    const checkedCheckboxesValues = [];

    checkedCheckboxes.each((index, checkbox) => {
      checkedCheckboxesValues.push(checkbox.value);
    });

    debounce(changeCalendar(checkedCheckboxesValues), 1000);
  });

  function debounce(func, timeout = 1000) {
    let timer;
    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(() => {
        func.apply(this, args);
      }, timeout);
    };
  }

  function changeCalendar(selectedEvents) {
    const newEventSources = selectedEvents.map((event) => eventSources[event]);

    calendar.removeAllEventSources();
    
    for(event of newEventSources) {
      calendar.addEventSource(event);
    }
  }
});
