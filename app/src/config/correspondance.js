const types = {
    1: {
            type: "froid inhabituel",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    2: {
            type: "épisode neigeux",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    3: {
            type: "douceur inhabituelle",
            icon: require('@/assets/images/live_pics/1_secheresse.svg'),
            color: '#E6211155',
        },
    4: {
            type: "épisode pluvieux",
            icon: require('@/assets/images/live_pics/1_pluie.svg'),
            color: '#1145E655',
        },
    5: {
            type: "inondation",
            icon: require('@/assets/images/live_pics/1_innondation.svg'),
            color: '#4BE61155',
        },
    6: {
            type: "tempête",
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        },
    7: {
            type: "cyclone",
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        },
    8: {
            type: "chaleur",
            icon: require('@/assets/images/live_pics/1_secheresse.svg'),
            color: '#E6211155',
        },
    9: {
            type: "orages",
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        },
    10: {
            type: "sécheresse",
            icon: require('@/assets/images/live_pics/1_secheresse.svg'),
            color: '#E6211155',
        },
    11: {
            type: "pluies verglaçantes",
            icon: require('@/assets/images/live_pics/1_pluie.svg'),
            color: '#1145E655',
        },
    12: {
            type: "gelées tardives",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    13: {
            type: "gelées précoces",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    14: {
            type: "froid",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    15: {
            type: "grêle",
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        },
    16: {
            type: "épisode neigeux tardif",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    17: {
            type: "épisode neigeux précoce",
            icon: require('@/assets/images/live_pics/1_neige.svg'),
            color: '#11E6E355',
        },
    18: {
            type: "tornade",
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        },
    19: {
            type: "dépression extra-tropicale",
            icon: require('@/assets/images/live_pics/1_innondation.svg'),
            color: '#4BE61155',
        },
    20: {
            type: "tempête tropicale",
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        },
    21: {
            type: "autres",   
            icon: require('@/assets/images/live_pics/1_live.svg'),
            color: '#E611C955',
        }
}

const importance = {
    999: "non concerné",
    0: "non défini",
    1: "anecdotique",
    2: "notable",
    3: "remarquable",
    4: "exceptionnel",
    5: "mémorable",
    99: "dépression tropicale",
    98: "tempête tropicale",
    91: "cyclone cat. 1",
    92: "cyclone cat. 2",
    93: "cyclone cat. 3",
    94: "cyclone cat. 4",
    95: "cyclone cat. 5",   
}

const departements = [
    {
        dep: [67, 68],
        region: 42
    }, {
        dep: [24, 33, 40, 47, 64],
        region: 72
    }, {
        dep: [15, 43, 63, 3],
        region: 83
    }, {
        dep: [21, 58, 71, 89],
        region: 26
    }, {
        dep: [22, 29, 35, 56],
        region: 53
    }, {
        dep: [10, 51, 52, 8],
        region: 21
    }, {
        dep: ["2A", "2B"],
        region: 94
    }, {
        dep: [25, 39, 70, 90],
        region: 43
    }, {
        dep: [75, 91, 92, 93, 77, 94, 95, 78],
        region: 11
    }, {
        dep: [11, 30, 34, 48, 66],
        region: 91
    }, {
        dep: [19, 23, 87],
        region: 74
    }, {
        dep: [18, 28, 36, 37, 41, 45],
        region: 24
    }, {
        dep: [54, 55, 57, 88],
        region: 41
    }, {
        dep: [12, 31, 32, 46, 65, 81, 82, 9],
        region: 73
    }, {
        dep: [59, 62],
        region: 31
    }, {
        dep: [14, 50, 61],
        region: 25
    }, {
        dep: [27, 76],
        region: 23
    }, {
        dep: [44, 49, 53, 72, 85],
        region: 52
    }, {
        dep: [60, 80, 2],
        region: 22
    }, {
        dep: [16, 17, 79, 86],
        region: 54
    }, {
        dep: [13, 83, 84, 4, 5, 6],
        region: 93
    }, {
        dep: [26, 38, 42, 69, 73, 74, 1, 7],
        region: 82
    },
]

const typeFilter = {
    "Orage": [4, 9, 11, 19],
    "Gelée": [12, 13, 16, 17],
    "Inondation": [5],
    "Tornade": [6, 7, 18, 20],
    "Grêle": [15],
    "Froid": [2, 3, 14]
}

export { types, importance, departements, typeFilter };