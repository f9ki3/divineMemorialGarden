// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    var zoomLevel = 1; // Start with zoom disabled
    var maxZoom = 5;
    var minZoom = 1; // Set the default minimum zoom to 1
    var step = 0.1;
    var container = document.getElementById('zoom-container');
    var content = document.getElementById('zoom-content');
    var isDragging = false;
    var startScrollLeft;
    var startScrollTop;
    var startX;
    var startY;

    document.getElementById('zoom-in').addEventListener('click', function() {
      zoomLevel += step;
      if (zoomLevel > maxZoom) {
        zoomLevel = maxZoom;
      }
      updateZoom();
    });

    document.getElementById('zoom-out').addEventListener('click', function() {
      zoomLevel -= step;
      if (zoomLevel < minZoom) {
        zoomLevel = minZoom;
      }
      updateZoom();
    });

    function updateZoom() {
      content.style.transform = 'scale(' + zoomLevel + ')';
      content.style.transformOrigin = '0 0';
      
      // Calculate the new scroll positions based on zoom level
      var scrollXRatio = container.scrollLeft / (container.scrollWidth - container.clientWidth);
      var scrollYRatio = container.scrollTop / (container.scrollHeight - container.clientHeight);
      
      container.scrollLeft = scrollXRatio * (container.scrollWidth - container.clientWidth);
      container.scrollTop = scrollYRatio * (container.scrollHeight - container.clientHeight);
    }

    // Function to handle content dragging
    function startDrag(e) {
      isDragging = true;
      startX = e.clientX;
      startY = e.clientY;
      startScrollLeft = container.scrollLeft;
      startScrollTop = container.scrollTop;
      content.style.cursor = 'grabbing';
    }

    function dragContent(e) {
      if (isDragging) {
        var deltaX = e.clientX - startX;
        var deltaY = e.clientY - startY;
        container.scrollLeft = startScrollLeft - deltaX;
        container.scrollTop = startScrollTop - deltaY;
      }
    }

    function endDrag() {
      isDragging = false;
      content.style.cursor = 'grab';
    }

    // Attach event listeners for dragging
    content.addEventListener('mousedown', startDrag);
    content.addEventListener('mousemove', dragContent);
    content.addEventListener('mouseup', endDrag);
    content.addEventListener('mouseleave', endDrag);
  });