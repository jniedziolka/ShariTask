const taskModule = {
    state: () => ({
        tasks: null,
        taskStatuses: null,
        taskVisibilities: null,
        isLoading: false,
        isFailure: false,
        isFirstFetched: false
    }),
    mutations: {
        setTasks (state, payload) {
            state.tasks = payload.tasks;
        },
        addTaskToList (state, payload) {
            state.tasks = [...state.tasks, JSON.parse(payload.task)];
        }
    },
    actions: {
        async fetchTasks ({ commit }) {
            try {
                const response = await axios.get('/api/jsonTasks');
                commit('setTasks', {
                    tasks: response.data
                });
            } catch (error) {
                console.error(error);
            }
        }
    },
    getters: {

    }
};

export default taskModule;
