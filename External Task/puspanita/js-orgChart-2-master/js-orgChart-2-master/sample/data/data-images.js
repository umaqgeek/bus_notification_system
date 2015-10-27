// Demo data.
var lpszDemoSets = ["Frank", "Fred", "France", "James", "Jon", "Jonic", "Shannon", "Jessice", "Josh", "Alex", "Alan", "Bob"];
var lpszDemoMaps = [];
var lpszDemoImages = ["avatar-1.png", "avatar-2.png", "avatar-3.png", "avatar-4.png", "avatar-5.png", "avatar-6.png"];

// Create params for root node.
var nodeParams = {
    options: {
        targetName: "orgchart",
        subTargetName: "orgnode",
        clsName: "org-node"
    },
    customParams: {
        imgAvatar: lpszDemoImages[0]
    }
};

var pOrgNodes = new OrgNodeV2(nodeParams);

// Create random children nodes.
var pOrgChildNode = {};
var pOrgChildNodes = null;

for (var i = 0; i < lpszDemoSets.length; i ++) {
    var lpszDemoData = lpszDemoSets[i];
    var lImageIndex = Math.round(Math.random() * (lpszDemoImages.length - 1));
    
    var nodeChildParams = {
        options: {
            targetName: "orgchart",
            subTargetName: "orgnode",
            clsName: "org-node"
        },
        customParams: {
            imgAvatar: (lImageIndex > lpszDemoImages.length) ? lpszDemoImages[0] : lpszDemoImages[lImageIndex]
        }
    };
    
    pOrgChildNode[lpszDemoData] = new OrgNodeV2(nodeChildParams);
    lpszDemoMaps[i] = lpszDemoData;
    
    if (i == 0) {
        pOrgChildNodes = pOrgChildNode[lpszDemoData];
    }
    else {
        var lIndex = Math.round(Math.random() * (lpszDemoMaps.length - 0));
        
        lIndex = (lIndex > lpszDemoMaps.length) ? (lpszDemoMaps.length - 1) : lIndex;
        
        if (typeof lpszDemoMaps[lIndex] === "string") {
            pOrgChildNode[lpszDemoMaps[lIndex]].addNodes(pOrgChildNode[lpszDemoData]);
        }
    }
}

// Add children nodes to root node.
pOrgNodes.addNodes(pOrgChildNodes);
