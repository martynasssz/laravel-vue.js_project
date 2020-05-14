export const is404 = function(err) {
    return isErrorWithResponseAndStatus && 404 === err.response.status;
};

export const is422 = function(err) {
    return isErrorWithResponseAndStatus && 422 === err.response.status;
};

const isErrorWithResponseAndStatus = function(err) {
    return err.response && err.response.status;
};

