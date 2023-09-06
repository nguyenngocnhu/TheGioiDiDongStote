<style>
    .share-list {
  display: flex;
  flex-direction: row;
}

.share-list a {
  border-radius: 100px;
  width: 50px;
  height: 50px;
  padding: 7px;
  margin: 10px;
  cursor: pointer;
  overflow: hidden;
  
  img {
    width: 100%;
    height: 100%;
    filter: invert(100%);
  }
}

a.fb-h { background: #3B5998; }
a.tw-h { background: #00acee; }
a.li-h { background: #0077B5; }
a.re-h { background: #FF5700; }
a.pi-h { background: #c8232c; }



// Page Styling
* {
  margin: 0;
  pading: 0;
  box-sizing: border-box;
}

.share-buttons-container {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #bcbcf2;
  width: 100%;
  height: 100vh;
}
</style>