import { createStore } from "vuex"


// export const state = () => ({

// Chapitres:[]    

//     });
    
// export const getters= {

//    chapitres: (state) => state.Chapitres 

// };
// export const action = {
//     async AddChapitres({ dispatch, commit },data){
//         commit("ADDChapitres" ,data);
//         // dispatch("showAllChapitres");

//     },
//     async shoAllChapitres({commit}){
//     commit("SETChapitres", data)
//     }}

//     export const mutations = {

//     UPDATEChapitres(state,value){

//     },
//     AddChapitres(state,value){
//         state.Chapitres.push(data,value)
//     },

//     SETChapitres(state,value){
//         state.Chapitres=value
//     }

//     };

    

const store = createStore({

state:{
    chapitres:[]

},

    getters:{
        getChapitres(state){
            return state.chapitres
        }
    },
    
    
    mutation:{
        addChapitre(state , chapitre){
        
            state.chapitres.push(chapitre)
        }
}
})





export default store