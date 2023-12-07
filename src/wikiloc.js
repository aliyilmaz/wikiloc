

function isWikilocTrailValidation(link){
    const trailPageRegex = /^(https?:\/\/)(.*\.)?\wikiloc\.com\/([^\/]+)\/(.*)/;
    var match = link.match(trailPageRegex);
    if(match != null){
        let scheme = match['input'].split('/');
        const rawId = scheme[4].split('').reverse().join('').split('-');
      
        if(rawId[0] != NaN && rawId[0] != '' && rawId[0] != undefined){ return true; }
    }
    
    return false;
}

function getWikilocTrailId(link){
    const trailPageRegex = /^(https?:\/\/)(.*\.)?\wikiloc\.com\/([^\/]+)\/(.*)/;
    var match = link.match(trailPageRegex);
    if(match != null){
        let scheme = match['input'].split('/');
        const rawId = scheme[4].split('').reverse().join('').split('-');
      
        if(rawId[0] != NaN && rawId[0] != '' && rawId[0] != undefined){ return rawId[0].split('').reverse().join(''); }
    }
    
    return null;
}

function isWikilocTrailMapValidation(link) {        

    const trailMapRegex = /^(https?:\/\/)(.*\.)?\wikiloc\.com\/wikiloc\/embedv2\.do\?id=[0-9]+&elevation=(on|off)&images=(on|off)&maptype=(H|S)/;
    var match = link.match(trailMapRegex);
    if(match != null){ 
        let trailMapScheme = match['input'].split('/');
        const trailRawId = trailMapScheme[4].split('&');
        const Id = trailRawId[0].split('=')[1];
        if(Id[0] != NaN && Id[0] != '' && Id[0] != undefined){ return true; }
    }
      
    return false;

}
function getWikilocTrailMapId(link) {        

    const trailMapRegex = /^(https?:\/\/)(.*\.)?\wikiloc\.com\/wikiloc\/embedv2\.do\?id=[0-9]+&elevation=(on|off)&images=(on|off)&maptype=(H|S)/;
    var match = link.match(trailMapRegex);
    if(match != null){ 
        let trailMapScheme = match['input'].split('/');
        const trailRawId = trailMapScheme[4].split('&');
        const Id = trailRawId[0].split('=')[1];
        if(Id[0] != NaN && Id[0] != '' && Id[0] != undefined){ return Id; }
    }
      
    return null;

}
