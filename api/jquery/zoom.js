document.addEventListener('DOMContentLoaded', function () {
  var zoomLevel = 1,
      maxZoom = 5,
      minZoom = 1,
      step = 0.1,
      container = document.getElementById('zoom-container'),
      content = document.getElementById('zoom-content'),
      isDragging = false,
      startScrollLeft, startScrollTop, startX, startY;

  function updateZoom() {
    content.style.transform = 'scale(' + zoomLevel + ')';
    content.style.transformOrigin = '0 0';
    
    var scrollXRatio = container.scrollLeft / (content.offsetWidth - container.clientWidth),
        scrollYRatio = container.scrollTop / (content.offsetHeight - container.clientHeight);
    
    container.scrollLeft = scrollXRatio * (content.offsetWidth * zoomLevel - container.clientWidth);
    container.scrollTop = scrollYRatio * (content.offsetHeight * zoomLevel - container.clientHeight);
  }

  function startDrag(e) {
    if (e.type === 'mousedown' && e.button !== 0) return; // Only proceed if left mouse button is pressed
    isDragging = true;
    startX = e.clientX || e.touches[0].clientX; // Account for touch events
    startY = e.clientY || e.touches[0].clientY; // Account for touch events
    startScrollLeft = container.scrollLeft;
    startScrollTop = container.scrollTop;
    content.style.cursor = 'grabbing';
    // Disable text selection while dragging
    content.style.userSelect = 'none';
  }

  function dragContent(e) {
    if (!isDragging) return;
    var clientX = e.clientX || e.touches[0].clientX; // Account for touch events
    var clientY = e.clientY || e.touches[0].clientY; // Account for touch events
    var deltaX = clientX - startX;
    var deltaY = clientY - startY;
    container.scrollLeft = startScrollLeft - deltaX;
    container.scrollTop = startScrollTop - deltaY;
  }

  function endDrag() {
    isDragging = false;
    content.style.cursor = 'grab';
    // Re-enable text selection after dragging ends
    content.style.userSelect = 'auto';
  }

  content.addEventListener('mousedown', startDrag);
  content.addEventListener('mousemove', dragContent);
  content.addEventListener('mouseup', endDrag);
  content.addEventListener('mouseleave', endDrag);

  // For touch events
  content.addEventListener('touchstart', startDrag);
  content.addEventListener('touchmove', dragContent);
  content.addEventListener('touchend', endDrag);

  $('#zoom-in').click(function() {
    zoomLevel = Math.min(zoomLevel + step, maxZoom);
    updateZoom();
  });

  $('#zoom-out').click(function() {
    zoomLevel = Math.max(zoomLevel - step, minZoom);
    updateZoom();
  });

  $('#zoom-content').scroll(function() {
    var container = $(this);
    container.scrollLeft((container.prop('scrollWidth') - container.outerWidth()) / 2);
  });

  // Center the content horizontally initially
  $('#zoom-container').scrollLeft(($('#zoom-content').width() - $('#zoom-container').width()) / 2);
});
