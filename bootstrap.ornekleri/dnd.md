
# Drag and Drop

- https://www.yusufsezer.com.tr/html5-surukle-birak/
- https://gelecegiyazanlar.turkcell.com.tr/konu/web-programlama/egitim/201-html5-css/html5te-surukle-birak-drag-drop
- https://medium.com/@john.pickett/vue-draggable-drop-and-drop-sorting-for-vue-js-100222dcff65

```HTML
<!DOCTYPE html>
<html lang=en>
<title>Examples of DataTransfer's setData(), getData() and clearData()</title>
<meta content="width=device-width">
<style>

  .sourceTAG {
    color: blue;
    border: 1px solid black;
    width: 50px;
    height: 50px;
    background-color:blueviolet;
    margin: 3px;
    margin: 3px;
    display:inline-block;
  }

  #targetTAG {
    border: 1px solid black;
    background-color:burlywood;
    width: 300px;
    height: 100px;
    padding: 0;
    margin: 0px;
  }
</style>
<script>
  function dragstart_handler(ev) {
    console.log("dragStart");

    // Change the source element's background color to signify drag has started
    ev.currentTarget.style.border = "dashed";

    // Set the drag's format and data. Use the event target's id for the data
    ev.dataTransfer.setData("text/plain", ev.target.id);
  }

  function dragover_handler(ev) {
    console.log("dragOver");
    ev.dataTransfer.dropEffect = "move"
    ev.preventDefault();
  }

  function drop_handler(ev) {
    console.log("Drop");
    ev.preventDefault();
    // Get the data, which is the id of the drop target
    var data = ev.dataTransfer.getData("text/plain");

    console.log(data);

    if(data == "yer1")
    {
      document.getElementById("MESAJ").innerHTML = "OK!"
      ev.target.appendChild(document.getElementById(data));
      // Clear the drag data cache (for all formats/types)
      ev.dataTransfer.clearData();
    } else {
      document.getElementById("MESAJ").innerHTML = "OLMAZ !!!!!"
    }
  }
</script>

<body>
  <h1>Examples of <code>DataTransfer</code>: <code>setData()</code>, <code>getData()</code>, <code>clearData()</code></h1>
  <div>
    <div id="yer1" class="sourceTAG" ondragstart="dragstart_handler(event);" draggable="true">Yer 1</div>
    <div id="yer2" class="sourceTAG" ondragstart="dragstart_handler(event);" draggable="true">Yer 2</div>
  </div>
  <div id="targetTAG" ondrop="drop_handler(event);" ondragover="dragover_handler(event);"></div>
  <h1 id="MESAJ">?</h1>
</body>

</html>
```
