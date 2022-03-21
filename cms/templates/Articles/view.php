<h1><?=h($article->title)?></h1>
<p><?=h($article->body)?></p>
<p><b>Tags:</b> <?=h($article->tag_string)?></p>
<p><small>Created: <?=$article->created->format(DATE_RFC850)?></small></p>
<td><?=$this->Html->link('Edit', ['action' => 'edit', $article->slug])?> |
<?=$this->Form->postLink(
    'Delete',
    ['action' => 'delete', $article->slug],
    ['confirm' => 'Are you sure?'])
?></td>