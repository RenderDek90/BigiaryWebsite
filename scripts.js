function validate() {
  var namea = document.getElementById('name').value;
  var title = document.getElementById('headline').value;
  var story = document.getElementById('story').value;
  var error_name = 0;
  var error_title = 0;
  var error_story = 0;

  if (namea.length < 2 || namea.value == ' ') {
    console.log('nama kurang');
    document.getElementById('alert-name').style.visibility = 'visible';
    error_name = 1;
    console.log(error_name);
    // return false;
  } else {
    error_name = 0;
    console.log(error_name);
    document.getElementById('alert-name').style.visibility = 'hidden';
  }
  if (title.length < 1) {
    console.log('alert title');
    document.getElementById('alert-title').style.visibility = 'visible';
    error_title = 1;
    console.log(error_title);
    // return false;
  } else {
    error_title = 0;
    console.log(error_title);
    document.getElementById('alert-title').style.visibility = 'hidden';
  }
  console.log(story.split(' '));
  if (story.split(' ').length < 5 || story.split(' ').length > 300) {
    document.getElementById('alert-story').style.visibility = 'visible';
    console.log('alert story');
    error_story = 1;
    console.log(error_story);
    // return false;
  } else {
    error_story = 0;
    console.log(error_story);
    document.getElementById('alert-story').style.visibility = 'hidden';
  }

  if (error_name === 0 && error_story === 0 && error_title === 0) {
    alert('Successfully Posted!!');
    return true;
  }
  return false;
}
