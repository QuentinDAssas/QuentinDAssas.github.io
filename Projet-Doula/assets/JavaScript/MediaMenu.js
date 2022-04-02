'use strict';
// Menu selection filter

document.getElementById('type').addEventListener('change', function() {
      if(this.value=='images')
      {
        document.getElementById('pages').classList.remove('hidden');
        document.getElementById('pages').classList.add('active');
        document.getElementById('pagesSelect').addEventListener('change', function() 
        {
          switch(this.value)
          {
            case 'Home':
              document.getElementById('servicesPages').classList.remove('active');
              document.getElementById('servicesPages').classList.add('hidden');
              document.getElementById('ressources').classList.remove('active');
              document.getElementById('ressources').classList.add('hidden');
              document.getElementById('who').classList.remove('active');
              document.getElementById('who').classList.add('hidden');
              document.getElementById('home').classList.remove('hidden');
              document.getElementById('home').classList.add('active');
              break;
            case 'ServicesPages':
              document.getElementById('home').classList.remove('active');
              document.getElementById('home').classList.add('hidden');
              document.getElementById('who').classList.remove('active');
              document.getElementById('who').classList.add('hidden');
              document.getElementById('ressources').classList.remove('active');
              document.getElementById('ressources').classList.add('hidden');
              document.getElementById('servicesPages').classList.remove('hidden');
              document.getElementById('servicesPages').classList.add('active');
              document.getElementById('servicesPagesSelectSelect').addEventListener('change', function() 
              {
                console.log(this.value);
              
              switch(this.value)
              {
              case 'servicesPages0':
                document.getElementById('accNaissance').classList.remove('active');
                document.getElementById('accNaissance').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('active');
                document.getElementById('soutienPerinatal').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('active');
                document.getElementById('blessingWay').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('active');
                document.getElementById('soinRebozo').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('active');
                document.getElementById('tenteRouge').classList.add('hidden');
                document.getElementById('services').classList.remove('hidden');
                document.getElementById('services').classList.add('active');
                break;
            case 'servicesPages1':
                document.getElementById('services').classList.remove('active');
                document.getElementById('services').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('active');
                document.getElementById('soutienPerinatal').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('active');
                document.getElementById('blessingWay').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('active');
                document.getElementById('soinRebozo').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('active');
                document.getElementById('tenteRouge').classList.add('hidden');
                document.getElementById('accNaissance').classList.remove('hidden');
                document.getElementById('accNaissance').classList.add('active');
                break;
            case 'servicesPages2':
                document.getElementById('services').classList.remove('active');
                document.getElementById('services').classList.add('hidden');
                document.getElementById('accNaissance').classList.remove('active');
                document.getElementById('accNaissance').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('active');
                document.getElementById('soutienPerinatal').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('active');
                document.getElementById('blessingWay').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('active');
                document.getElementById('soinRebozo').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('active');
                document.getElementById('tenteRouge').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('hidden');
                document.getElementById('accPostNatal').classList.add('active');
                break;
            case 'servicesPages3':
                document.getElementById('services').classList.remove('active');
                document.getElementById('services').classList.add('hidden');
                document.getElementById('accNaissance').classList.remove('active');
                document.getElementById('accNaissance').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('active');
                document.getElementById('blessingWay').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('active');
                document.getElementById('soinRebozo').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('active');
                document.getElementById('tenteRouge').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('hidden');
                document.getElementById('soutienPerinatal').classList.add('active');
                break;
            case 'servicesPages4':
                document.getElementById('services').classList.remove('active');
                document.getElementById('services').classList.add('hidden');
                document.getElementById('accNaissance').classList.remove('active');
                document.getElementById('accNaissance').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('active');
                document.getElementById('soutienPerinatal').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('active');
                document.getElementById('soinRebozo').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('active');
                document.getElementById('tenteRouge').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('hidden');
                document.getElementById('blessingWay').classList.add('active');
                break;
              case 'servicesPages5':
                document.getElementById('services').classList.remove('active');
                document.getElementById('services').classList.add('hidden');
                document.getElementById('accNaissance').classList.remove('active');
                document.getElementById('accNaissance').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('active');
                document.getElementById('soutienPerinatal').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('active');
                document.getElementById('blessingWay').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('active');
                document.getElementById('tenteRouge').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('hidden');
                document.getElementById('soinRebozo').classList.add('active');
                break;
              case 'servicesPages6':
                document.getElementById('services').classList.remove('active');
                document.getElementById('services').classList.add('hidden');
                document.getElementById('accNaissance').classList.remove('active');
                document.getElementById('accNaissance').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('soutienPerinatal').classList.remove('active');
                document.getElementById('soutienPerinatal').classList.add('hidden');
                document.getElementById('accPostNatal').classList.remove('active');
                document.getElementById('accPostNatal').classList.add('hidden');
                document.getElementById('blessingWay').classList.remove('active');
                document.getElementById('blessingWay').classList.add('hidden');
                document.getElementById('soinRebozo').classList.remove('active');
                document.getElementById('soinRebozo').classList.add('hidden');
                document.getElementById('tenteRouge').classList.remove('hidden');
                document.getElementById('tenteRouge').classList.add('active');
                break;
              }
              });
              break;
            case 'Who':
              document.getElementById('home').classList.remove('active');
              document.getElementById('home').classList.add('hidden');
              document.getElementById('servicesPages').classList.remove('active');
              document.getElementById('servicesPages').classList.add('hidden');
              document.getElementById('ressources').classList.remove('active');
              document.getElementById('ressources').classList.add('hidden');
              document.getElementById('who').classList.remove('hidden');
              document.getElementById('who').classList.add('active');
              break;
            case 'Ressources':
              document.getElementById('home').classList.remove('active');
              document.getElementById('home').classList.add('hidden');
              document.getElementById('servicesPages').classList.remove('active');
              document.getElementById('servicesPages').classList.add('hidden');
              document.getElementById('who').classList.remove('active');
              document.getElementById('who').classList.add('hidden');
              document.getElementById('ressources').classList.remove('hidden');
              document.getElementById('ressources').classList.add('active');
              break; 
         }
        });
      }else if(this.value=='logo')
      {
        document.getElementById('pages').classList.remove('active');
        document.getElementById('pages').classList.add('hidden');
        alert('Attention cela remplacera le logo actuelle.');
      }else
      {
        document.getElementById('pages').classList.remove('active');
        document.getElementById('pages').classList.add('hidden');
        alert('Attention cela remplacera le favicon actuelle.');
      }   
});