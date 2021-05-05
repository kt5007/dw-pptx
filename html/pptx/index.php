<?php
    include('../common/_header.php');
    require '../common/function.php';
    $todayTitle = getTodayTitle();
?>

  <main>
    <section class="py-5">
      <div class="container">
        <form method="post" action="./action/generate.php">
          <div class="form-group">
            <div class="py-2">
              <label for="title">Title</label>
              <textarea class="form-control" name="title" id="title" rows="2" placeholder="表紙のタイトル" ><?= $todayTitle ?></textarea>
            </div>
            <div class="py-2">
              <label for="text_phrases">Phrases</label>
              <textarea class="form-control" name="text_phrases" id="text_phrases" rows="20" placeholder=<?=$samplePhrases?>></textarea>
            </div>
            <div class="py-2">
              <button type="submit" class="btn btn-outline-success btn-lg btn-block" type="button" >パワポ作成</button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

<?php
  include('../common/_footer.php');
?>
