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
        },
        removeTaskFromTheList (state, payload) {
            const index = state.tasks.findIndex(task => task.id === payload.id);
            state.tasks.splice(index, 1);
        }
    },
    actions: {
        async fetchTasks ({ commit }) {
            try {
                const response = await axios.get(route('task.getJsonTasks'));
                commit('setTasks', {
                    tasks: response.data
                });
            } catch (error) {
                console.error(error);
            }
        },
    }
};

export default taskModule;
